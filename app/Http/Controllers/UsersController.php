<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Services;
use Illuminate\Support\Facades\Validator; 

class UsersController extends Controller
{
    public function showBookingForm()
    {
        $user = User::first();

        return view('pages.booking', ['user' => $user]);
    }

    public function showBookingPage($id)
    {
        if (auth()->check()) {
            $service = Services::find($id);

            if ($service) {
                return view('pages.booking', compact('service'));
            } else {
                return redirect()->route('home')->with('error', 'Service not found.');
            }
        } else {
            return view('auth.login');
        }
    }
    public function index()
    {
        return view('dashmin/adduser');
    }
    public function destroy($id)
    {

    }
    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];

        // Custom error messages
        $messages = [
            'email.unique' => 'The email is already in use.',
            'password.confirmed' => 'The password confirmation does not match.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->route('creatuser')
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new user
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('users.index')->with('success', 'User added successfully!');
    }

    public function create()
    {
        return view('pages.adduser');
    }
    public function userlist()
{
    $users = User::all(); // Retrieve all users from the database

    return view('dashmin.usertable', ['users' => $users]);
}

public function delete($id){
    User::destroy($id);
    return redirect()->back();
}



}
