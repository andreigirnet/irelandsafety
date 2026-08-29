<?php

namespace App\Http\Controllers;

use App\Models\DataRemovalRequest;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function handleDataRemoval(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'reason' => 'nullable|string|max:1000',
        ]);

        DataRemovalRequest::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'reason' => $validated['reason'] ?? null,
            'status' => 'pending',
        ]);

        return redirect()->back()->with('success', 'Your data removal request has been submitted successfully. We will process it shortly.');
    }
}
