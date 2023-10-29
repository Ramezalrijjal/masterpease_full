<?php

namespace App\Http\Controllers;

use App\Models\booking;
use DB;
use Illuminate\Http\Request;

class bookingcontroller extends Controller
{
    public function create(Request $request,$id){
     
           \App\Models\booking::insert([
                'tripName' => $request->tripName,
                'tripPrice' => $request->tripPrice,
                'tripDate' => $request->tripDate,
                'numAdults' => $request->numAdults,
                'userName' => $request->userName,
                'userEmail' => $request->userEmail,
                
            ]);
       $booking= booking::find($id);
        return view('pages.payment_options ',compact('booking'));
    }

    public function payment(){
        return view('pages.welcome1');
    }

    public function index(){
        return view('pages.payment');
    }
}
