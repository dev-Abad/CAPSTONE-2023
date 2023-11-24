<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;
use App\Models\faculty;
use App\Models\studForm;

class facultyController extends Controller
{

    function faclogin(){
        return view('faculty/facLogin');
    }

    function proForm(){
        return view('faculty/proForm');
    }

    function facregistration(){
        return view('faculty/facReg');
    }

    public function dashboardPage()
    {
        return view('faculty/dashboard');
    }

    public function updateDashboardPage(Request $request)
    {
        return redirect(route('dashboardPage'));
    }

    function handSubjPage(Request $request )
    {
        $search = $request->input('search');

        // function for search 
        $student = studForm::where('userid', 'LIKE', "%$search%")
            ->orWhere('dep', 'LIKE', "%$search%")
            ->orWhere('lname', 'LIKE', "%$search%")
            ->orWhere('fname', 'LIKE', "%$search%")
            ->get();

        return view('faculty/handSubj', ['student' => $student]);
    }
    
    

    //for login 
    function facloginPost(Request $request ){
        $request-> validate([
            'name' => 'required',
            'password' => 'required'
        ]);

        $user = faculty::where('name', $request->name)->first();

    if ($user && Hash::check($request->password, $user->password)) {
        auth()->login($user);
        $request->session()->put('name', $user->name);
        return redirect()->intended(route('dashboardPage'));
    }

    return redirect(route('faclogin'));
    }

    protected function redirectTo()
    {
    return '/dashboard';
    }
    //this is for registration
    function facregistrationPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:faculty',
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
        $user = faculty::create($data);

        if(!$user){
            return redirect(route('facregistration'));
        }

        $request->session()->put('name', $user->name);
        //dd(session('name'));
        
        return redirect(route('proForm'));
    }
    
    function logout(Request $request){
        $request->session()->invalidate();
        Auth::logout();
        return redirect(route('faclogin'));
    }
}
