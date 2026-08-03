<?php

namespace App\Http\Controllers;

use App\Mail\CertificateMail;
use App\Mail\RegisterEmployeeMail;
use App\Models\Certificate;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificates = DB::table('certificates')
            ->select('*', 'certificates.created_at as valid_from', 'certificates.id as id')
            ->join('packages', 'certificates.package_id', '=', 'packages.id')
            ->where('certificates.user_id', auth()->user()->id)
            ->orderByDesc('valid_from')
            ->paginate(10);
        return view('pages.back.certificate')->with('certificates', $certificates);
    }

    public function getApiCertificates(Request $request)
    {
        $certificates = DB::table('certificates')
            ->select('*', 'certificates.created_at as valid_from', 'certificates.id as id')
            ->join('packages', 'certificates.package_id', '=', 'packages.id')
            ->where('certificates.user_id', $request->user()->id)
            ->orderByDesc('valid_from')
            ->get();

        return response()->json([
            'status' => 'success',
            'data' => $certificates
        ]);
    }

    public function getAllCertificates(Request $request){
        $certificates = DB::select("SELECT *, certificates.user_id as user_id, (SELECT email FROM users WHERE id=user_id) as email, (SELECT name FROM users WHERE id=user_id) as holderName FROM certificates ORDER BY created_at DESC");
        $page = $request->input('page', 1);
        $size = 30;
        $collectedData = collect($certificates);
        $paginationData = new LengthAwarePaginator(
            $collectedData->forPage($page, $size),
            $collectedData->count(),
            $size,
            $page
        );
        $paginationData->setPath('/admin/certificates');
        return view('pages.admin.certificates.index')->with('certificates',$paginationData);
    }

    public function searchCertificate(Request $request){
        $certificate = DB::select("SELECT *, certificates.user_id as user_id, (SELECT email FROM users WHERE id=user_id) as email, (SELECT name FROM users WHERE id=user_id) as holderName FROM certificates WHERE certificates.unique_id LIKE'" . $request->unique_id . "%'");
        if ($certificate === []){
            return redirect()->back()->with('success', 'No record has been found with this id');
        }
        return view('pages.admin.certificates.search')->with('certificate',$certificate[0]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $packageId)
    {
        $userId = $request->userId;  // ✅ secure
        $lockKey = "certificate_{$userId}_{$packageId}";

        $lock = Cache::lock($lockKey, 30);

        if (!$lock->get()) {
            return back()->with('error', 'Certificate is already being generated. Please wait...');
        }

        try {
            // ✅ Check if certificate already exists
            $existingCertificate = Certificate::where('user_id', $userId)
                ->where('package_id', $packageId)
                ->first();

            if ($existingCertificate) {
                return redirect()->route('certificate.index')
                    ->with('success', 'Certificate already generated.');
            }

            // ✅ Better unique ID
            $uniqueCertificateId = 'CERT-' . Str::upper(Str::random(8));
            $expirationDate = now()->addYears(3)->format('Y-m-d');

            $certificateCreated = Certificate::create([
                'user_id'         => $userId,
                'package_id'      => $packageId,
                'unique_id'       => $uniqueCertificateId,
                'expiration_date' => $expirationDate
            ]);

            $holder =  $user = User::findOrFail($request->userId);
            $certificateUrl = config('app.url') . '/certificate/' . $certificateCreated->id;

            // Generate PDF
            $options = new \Dompdf\Options();
            $options->set('isRemoteEnabled', true);

            $dompdf = new \Dompdf\Dompdf($options);
            $dompdf->setPaper('letter', 'landscape');

            // Optimized data fetching (relying on raw join data)
            $certificate = DB::select("
            SELECT certificates.*, certificates.created_at as valid_from, packages.product_id
            FROM certificates
            JOIN packages ON certificates.package_id = packages.id
            WHERE certificates.id = ?
        ", [$certificateCreated->id]);

            $image = $certificate[0]->product_id ?? null;

            $dompdf->loadHtml(
                view('pages.back.certificateAttach', compact('certificate', 'holder', 'image'))->render()
            );

            $dompdf->render();
            $output = $dompdf->output();

            // ✅ Save file to storage
            $fileName = "certificates/{$userId}_{$packageId}.pdf";
            Storage::put($fileName, $output);

            // Send email
//            Mail::to($holder->email)->send(
//                new CertificateMail($certificateUrl, storage_path("app/{$fileName}"))
//            );

            // ✅ Removed accidental dd($packageId);

            // Update package
            Package::where('id', $packageId)->update([
                'certificate_id' => $certificateCreated->id
            ]);

            return redirect()->route('certificate.index')->with('success', 'Certificate Generated');

        } finally {
            $lock->release(); // 🔓 always release
        }
    }
    public function emailCertificate($certificateId)
    {
        try {
            $certificate = Certificate::findOrFail($certificateId);
            $user = User::findOrFail($certificate->user_id);
            $certificateUrl = config('app.url') . '/certificate/' . $certificate->id;
            $fileName = "certificates/{$user->id}_{$certificate->package_id}.pdf";
            $filePath = storage_path("app/{$fileName}");

            // Check if the PDF file exists before trying to send it
            if (!file_exists($filePath)) {
                return back()->with('error', 'PDF file not found on the server. Please download or regenerate it first.');
            }

//             Send the email
            Mail::to($user->email)->send(
                new CertificateMail($certificateUrl, $filePath)
            );

            return back()->with('success', 'Certificate successfully emailed to ' . $user->email);

        } catch (\Exception $e) {
            return back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }

    public function apiStore(Request $request, $packageId)
    {
        $userId = $request->input('userId');

        if (!$userId) {
            return response()->json([
                'success' => false,
                'message' => 'User ID is missing from request payload.'
            ], 422);
        }

        $lockKey = "certificate_{$userId}_{$packageId}";
        $lock = Cache::lock($lockKey, 30);

        if (!$lock->get()) {
            return response()->json([
                'success' => false,
                'message' => 'Certificate is already being generated. Please wait...'
            ], 429);
        }

        try {
            $existingCertificate = Certificate::where('user_id', $userId)
                ->where('package_id', $packageId)
                ->first();

            if ($existingCertificate) {
                // ✅ Update package status and link certificate if already exists
                Package::where('id', $packageId)->update([
                    'certificate_id' => $existingCertificate->id,
                    'status' => 'theory' // Update status to theory/passed
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Certificate already generated.',
                    'certificate_id' => $existingCertificate->id,
                    'already_exists' => true
                ], 200);
            }

            $uniqueCertificateId = 'CERT-' . Str::upper(Str::random(8));
            $expirationDate = now()->addYears(3)->format('Y-m-d');

            $certificateCreated = Certificate::create([
                'user_id'         => $userId,
                'package_id'      => $packageId,
                'unique_id'       => $uniqueCertificateId,
                'expiration_date' => $expirationDate
            ]);

            $holder = \App\Models\User::find($userId);
            $certificateUrl = config('app.url') . '/certificate/' . $certificateCreated->id;

            $options = new \Dompdf\Options();
            $options->set('isRemoteEnabled', true);

            $dompdf = new \Dompdf\Dompdf($options);
            $dompdf->setPaper('letter', 'landscape');

            $certificate = DB::select("
                SELECT certificates.*, certificates.created_at as valid_from, packages.product_id
                FROM certificates
                JOIN packages ON certificates.package_id = packages.id
                WHERE certificates.id = ?
            ", [$certificateCreated->id]);

            $image = $certificate[0]->product_id ?? null;

            $dompdf->loadHtml(
                view('pages.back.certificateAttach', compact('certificate', 'holder', 'image'))->render()
            );

            $dompdf->render();
            $output = $dompdf->output();

            $fileName = "certificates/{$userId}_{$packageId}.pdf";
            Storage::put($fileName, $output);

            // ✅ Update package status to 'theory' and save certificate reference
            Package::where('id', $packageId)->update([
                'certificate_id' => $certificateCreated->id,
                'status' => 'theory'
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Certificate Generated Successfully',
                'certificate_id' => $certificateCreated->id,
                'certificate_url' => $certificateUrl,
                'already_exists' => false
            ], 200);

        } finally {
            $lock->release();
        }
    }

    //Downloand certificate
    public function certificateDownload($id)
    {

        $certificate = DB::select("SELECT *, certificates.created_at as valid_from FROM certificates JOIN packages ON certificates.package_id = packages.id WHERE certificates.id =" . $id);

        $holder      = User::find($certificate[0]->user_id);

        $package     = Package::find($certificate[0]->package_id);

        $image       = $package->product_id;

        $data        = ['certificate' => $certificate, 'holder' => $holder, 'image' => $image];

        $pdf         = Pdf::loadView('pages.back.generateCertificate', $data);

        $pdf->setPaper('a4', 'landscape');

        return $pdf->download('certificate.pdf');
    }

    public function getApiCertificateDownload(Request $request, $id)
    {
        $certificate = DB::select("SELECT *, certificates.created_at as valid_from FROM certificates JOIN packages ON certificates.package_id = packages.id WHERE certificates.id = ? AND certificates.user_id = ?", [$id, $request->user()->id]);

        if (empty($certificate)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Certificate not found or unauthorized'
            ], 404);
        }

        $holder  = User::find($certificate[0]->user_id);
        $package = Package::find($certificate[0]->package_id);
        $image   = $package->product_id;

        $data    = ['certificate' => $certificate, 'holder' => $holder, 'image' => $image];
        $pdf     = Pdf::loadView('pages.back.generateCertificate', $data);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->output();
    }

    /**
     * Display the specified resource.
     */

    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }
    public function verify(Request $request)
    {
        $request->validate([
            'unique_id' => 'required|string',
        ]);

        // Search the database for the unique_id
        $certificate = Certificate::where('unique_id', $request->unique_id)->first();

        if ($certificate) {
            return back()->with('success', "Valid Certificate! Issued to: " . $certificate->name);
        }

        return back()->with('fail', "Invalid Certificate. This ID does not exist in our records.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        $certificate->delete();
        return redirect()->back()->with('success', 'Certificate has been removed');
    }
}
