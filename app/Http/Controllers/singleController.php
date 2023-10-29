<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class singleController extends Controller
{
    public function index($id)
    {
      $singeservis=services::find($id);
      return view('pages.single_page',compact('singeservis'));

     
    }
}
