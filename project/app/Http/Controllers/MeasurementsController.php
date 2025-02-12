<?php

namespace App\Http\Controllers;

use App\Models\Measurements;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'fullname'        => 'required|string|max:255',
            'email'           => 'required|email|max:255',
            'phonenumber'     => 'required|string|max:20',
            'shippingaddress' => 'required|string|max:500',
            'garment'         => 'required|string|max:255',
            'style'           => 'nullable|string|max:255',
            'fabric'          => 'nullable|string|max:255',
            'color'           => 'nullable|string|max:100',
            'measurement'     => 'required|string|max:500',
            'specialrequest'  => 'nullable|string|max:500',
            'date'            => 'required|date',
            'budget'          => 'required|numeric|min:0',
            'image'           => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Handle image upload if an image is provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('measurements', 'public');
        }

        // Create a new measurement record
        Measurements::create([
            'fullname'        => $request->fullname,
            'email'           => $request->email,
            'phonenumber'     => $request->phonenumber,
            'shippingaddress' => $request->shippingaddress,
            'garment'         => $request->garment,
            'style'           => $request->style,
            'fabric'          => $request->fabric,
            'color'           => $request->color,
            'measurement'     => $request->measurement,
            'specialrequest'  => $request->specialrequest,
            'date'            => $request->date,
            'budget'          => $request->budget,
            'image'           => $imagePath, // Save image path
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Measurement sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Measurements $measurements)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Measurements $measurements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Measurements $measurements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Measurements $measurements)
    {
        //
    }
}
