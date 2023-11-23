<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\admin;
use App\Models\studForm;
use App\Models\prof_Form_Model;

class adminController extends Controller
{

    function adminlogin(){
        return view('admin/adminLogin');
    }

    function adminDashboard(){

        $student = studForm::all();
        $faculty = prof_Form_Model::all();
        return view('admin/adminDash', ['student' => $student, 'faculty' => $faculty]);
    }

    function overviewStudPage(Request $request)
    {

        $search = $request->input('search');

        // function for search 
        $students = studForm::where('userid', 'LIKE', "%$search%")
            ->orWhere('dep', 'LIKE', "%$search%")
            ->orWhere('lname', 'LIKE', "%$search%")
            ->orWhere('fname', 'LIKE', "%$search%")
            ->get();

        return view('admin/overviewStud', ['students' => $students]);
    }

    public function updateadminDashboardPage(Request $request)
    {
        return redirect(route('admindashboardPage'));
    }

    function adminregistration(){
        return view('admin/adminReg');
    }


    function adminloginPost(Request $request ){
        $request-> validate([
            'name' => 'required',
            'password' => 'required'
        ]);


        $user = admin::where('name', $request->name)->first();

            if ($user && Hash::check($request->password, $user->password)) {
                auth()->login($user);
                $request->session()->put('name', $user->name);
                return redirect()->intended(route('admindashboardPage'));
            }

            return redirect(route('adminlogin'));
        }

    protected function redirectTo()
    {
    return '/admindashboard'; // Replace with your desired URL
    }
    //this is for registration
    function adminregistrationPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin',
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
        $user = admin::create($data);

        if(!$user){
            return redirect(route('adminregistration'));
        }
        $request->session()->put('name', $user->name);
        //dd(session('name'));

        return redirect(route('adminlogin'));
    }

    function logoutadmin(Request $request){
        $request->session()->invalidate();
        Auth::logout();
        return redirect(route('adminlogin'));
    }
}
