<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class servicescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
     $service =DB::table('services')->get();
     return view('/dashmin/table',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('services.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function insert(Request $request){
    //     DB::table('services')->insert([
    //         'name' => $request->name,
    //         'description' => $request->description,
    //         'price' => $request->price,
    //         'image' => $request->image,
    //     ]);
    //  return redirect()->route('services');
    // }

    public function insert(Request $request){
        // Validate the form data, including the image file
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you accept image files with specific formats and a maximum size of 2MB
        ]);
    
        // Check if a file was uploaded and store it
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // This will save the image to the "public/images" directory.
        } else {
            // Handle the case where no image was provided or an error occurred during the upload.
            return redirect()->route('services')->with('error', 'Failed to upload image.');
        }
    
        // Insert the data into the database
        DB::table('services')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName, // Save the image filename in the database
        ]);
    
        return redirect()->route('services')->with('success', 'Service added successfully');
    }
    
    public function edit($id){
        $service = DB::table('services')->where('id', $id)->first();
        return view('dashmin.editcategory', compact('service'));
    }
    
    public function update(Request $request, $id){
        DB::table('services')->where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'image' => $request->input('image'),
        ]);
    
        return redirect()->route('services');
    }
    
    public function delete($id){
        DB::table('services')->where('id', $id)->delete();
        return redirect()->route('services');
    }
    
}

