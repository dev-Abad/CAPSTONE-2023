<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use App\Models\studForm;
use App\Models\certiModel;


class AuthManager extends Controller
{
    //this is a controller for login
    function login(){
        return view('student/loginpage');
    }
    public function studentdashboardPage()
    {
        return view('student/studentDash');
    }
    public function updatestudDashboardPage(Request $request)
    {
        return redirect(route('studentdashboardPage'));
    }

    function studentForm(){
        return view('student/studentForm');
    }

    function registration(){
        return view('student/registration');
    }

    function certiPage(){
        return view('student/certi');
    }

    function certiBtn(){
        return view('student/certiButton');
    }

    function projPage(){
        return view('student/proj');
    }
    // to require the user to input their credits
    function loginPost(Request $request ){
        $request-> validate([
            'name' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('name', $request->name)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            auth()->login($user);
            $request->session()->put('name', $user->name);


            return redirect()->intended(route('studentdashboardPage'));
        }
    
        return redirect(route('login'));
        }

        public function showCertificates($userId)
        {
            $user = User::find($userId);
    
            if ($user) {
                // Retrieve certificates for the authenticated user based on user_name
                $certificates = $user->certificates;
                return view('certificates.show', compact('certificates'));
            } else {
                // Handle case when user doesn't exist
                return redirect()->back()->with('error', 'User not found.');
            }
        }
    

    protected function redirectTo()
    {
    return '/dashboard'; // Replace with your desired URL
    }
    //this is for registration
    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'passwords' => [
                'required',
                'string',
                'min:8',  // Minimum length of 8 characters
                'regex:/^(?=.*[0-9])(?=.*[!@#$%^&*])[0-9a-zA-Z!@#$%^&*]+$/' // Requires at least one number and one symbol
            ],
        ]);
 
        $data['name'] = $request-> name;
        $data['email'] = $request-> email;
        $data['password'] = Hash::make($request-> passwords);
        $user = User::create($data);

        if(!$user){
            return redirect(route('registration'))-> with("error", "registration failed, try again");
        }
        return redirect(route('studentForm'))-> with("success", "registration success");
        
    }
    function logoutstud(Request $request){
        $request->session()->invalidate();
        Auth:: logout();
        return redirect(route('login'));
    }
}
  