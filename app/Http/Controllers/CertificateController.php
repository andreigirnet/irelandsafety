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
        $userId = auth()->id(); // ✅ secure
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

            $holder = auth()->user();
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
