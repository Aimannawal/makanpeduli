<?php

namespace App\Http\Controllers;

use App\Models\Approved_Donation;
use App\Models\Donnation_Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{
    // Display form for store (toko) to submit donation
    public function createRequest()
    {
        return view('toko.create');
    }

    // Store donation request submitted by store (toko)
    public function storeRequest(Request $request)
    {
        $request->validate([
            'food_item' => 'required|string',
            'quantity' => 'required|integer',
        ]);

        Donnation_Request::create([
            'user_id' => Auth::user()->id,  // assuming user is authenticated
            'food_item' => $request->food_item,
            'quantity' => $request->quantity,
            'status' => 'pending',
        ]);

        return redirect()->route('toko.index')->with('success', 'Donation request submitted!');
    }

    // Admin view to approve donation requests
    public function adminIndex()
    {
        $donationRequests = Donnation_Request::where('status', 'pending')->get();
        return view('admin.index', compact('donationRequests'));
    }

    // Admin approves donation and assigns recipient
    public function approveRequest(Request $request, Donnation_Request $donationRequest)
    {
        $request->validate([
            'recipient_name' => 'required|string',
            'food_photo' => 'required|image',
        ]);

        // Store the uploaded food photo
        $path = $request->file('food_photo')->store('food_photos');

        // Create approved donation
        Approved_Donation::create([
            'donation_request_id' => $donationRequest->id,
            'recipient_name' => $request->recipient_name,
            'food_photo' => $path,
        ]);

        // Update status to approved
        $donationRequest->update(['status' => 'approved']);

        return redirect()->route('admin.index')->with('success', 'Donation approved and recipient assigned!');
    }
}
