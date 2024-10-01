<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function create()
    {
        // Check if the authenticated user has an address
        $user = auth()->user();

        if (empty($user->address)) {
            // Redirect to the profile completion page with an error message
            return redirect()->route('toko.profile')->with('error', 'Silakan lengkapi alamat Anda sebelum menambah donasi.');
        }

        return view('toko.create'); // Proceed to the create view if the address is filled
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_item' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'unit' => 'required|string',
            'status' => 'required|string',
            'address' => 'nullable|string',
            'restaurant_name' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'expiry_date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Donation::create([
            'food_item' => $request->food_item,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'status' => $request->status,
            'address' => $request->address,
            'restaurant_name' => $request->restaurant_name,
            'user_id' => $request->user_id,
            'expiry_date' => $request->expiry_date,
            'description' => $request->description,
        ]);

        return redirect()->route('toko.index')->with('success', 'Donation created successfully.');
    }

    public function index()
    {
        $donations = Donation::all();
        return view('toko.index', compact('donations'));
    }

    public function show(Donation $donation)
    {
        return view('toko.show', compact('donation'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'restaurant_name' => 'nullable|string|max:255',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email; // Assuming you want to allow email updates
        $user->address = $request->address;
        $user->restaurant_name = $request->restaurant_name;
        $user->save();

        return redirect()->route('toko.create')->with('success', 'Profil Anda telah diperbarui.');
    }
}
