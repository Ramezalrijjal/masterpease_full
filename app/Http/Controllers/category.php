<?php

namespace App\Http\Controllers;

use App\Models\rc;
use Illuminate\Http\Request;

class category extends Controller
{
    
    public function index()
    {
        return view('dashmin/addcategory');
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        
    }

    
    public function show( $request)
    {
        //
    }

   
    public function edit( $id)
    {
        //
    }

    public function update(Request $request,  $id)
    {
        //
    }

    public function destroy($id)
    {
        
    }
}
