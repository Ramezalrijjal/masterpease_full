<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
class contactcontroller extends Controller
{
   public function create(){
    return view('contact.create');
   }
   public function insert(Request $request){
DB::table('contact')->insert([
    'Name' => $request->Name,
    'Email' => $request->Email,
    'Subject' => $request->Subject,
    'Message' => $request->Message,
]);

return response('Message has been sent');
   }

}
