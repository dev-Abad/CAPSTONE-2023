<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;


class AuthManager extends Controller
{
    //this is a controller for login
    function login(){
        return view('student/loginpage');
    }
    function dashboard(){
        return view('faculty/dashboard');
    }

    function studentForm(){
        return view('student/studentForm');
    }

    function registration(){
        return view('student/registration');
    }


    // to require the user to input their credits
    function loginPost(Request $request ){
        $request-> validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request-> only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect() -> intended(route('/dashboardPage'));
        }
        return redirect(route('login'))-> with("error", "Login details are not valid");
    }

    protected function redirectTo()
    {
    return '/dashboard'; // Replace with your desired URL
    }
    //this is for registration
    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => [
                'required',
                'string',
                'min:8',  // Minimum length of 8 characters
                'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*])[0-9a-zA-Z!@#$%^&*]+$/' // Requires at least one number and one symbol
            ],
        ]);
 
        $data['name'] = $request-> name;
        $data['email'] = $request-> email;
        $data['password'] = Hash::make($request-> password);
        $user = User::create($data);

        if(!$user){
            return redirect(route('registration'))-> with("error", "registration failed, try again");
        }
        return redirect(route('studFormPage'))-> with("success", "registration success");
        return redirect(route('proFormPage'))-> with("success", "registration success");
    }
    function logoutstud(){
        Session::flush();
        Auth:: logout();
        return redirect(route('login'));
    }
}
  