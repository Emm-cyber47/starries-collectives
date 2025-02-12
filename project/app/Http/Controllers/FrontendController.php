<?php

namespace App\Http\Controllers;
use App\Models\Measurements;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.welcome');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    
    public function doctors(){
        return view('frontend.doctors');
    }
    public function news(){
        return view('frontend.news');
    }

    public function submitform( Request $request){
      
        $validated = $request->validate([
            'fullname' => 'required|string',
            'email' => 'required|email',
            'phonenumber' => 'required|string',
            'shippingaddress' => 'required|string',
            'garment' => 'required|string',
            'style' => 'required|string',
            'fabric' => 'required|string',
            'color' => 'required|string',
            'measurement' => 'required|string',
            'specialrequest' => 'nullable|string',
            'date' => 'required|date',
            'budget' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $validated['image'] = $imageName;
        $validated['date'] = date('Y-m-d', strtotime($validated['date']));

        Measurements::create([
            'fullname' => $validated['fullname'],
            'email' => $validated['email'],
            'phonenumber' => $validated['phonenumber'],
            'shippingaddress' => $validated['shippingaddress'],
            'garment' => $validated['garment'],
            'style' => $validated['style'],
            'fabric' => $validated['fabric'],
            'color' => $validated['color'],
            'measurement' => $validated['measurement'],
            'specialrequest' => $validated['specialrequest'],
            'date' => $validated['date'],
            'budget' => $validated['budget'],
            'image' => $validated['image'],
            
        ]);

        return redirect()->back()->with('status', 'Measurement successfully sent!');

    }

}