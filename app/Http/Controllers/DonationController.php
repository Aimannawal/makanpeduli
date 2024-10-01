<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function create()
    {
        return view('toko.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'food_item' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'unit' => 'required|string',
            'expiry_date' => 'required|date',
            'description' => 'nullable|string',
        ]);

        Donation::create([
            'food_item' => $request->food_item,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
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
}
