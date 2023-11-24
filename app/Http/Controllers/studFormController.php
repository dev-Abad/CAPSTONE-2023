<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\studForm;

class studFormController extends Controller
{
    /** Display the form */
    public function studentForm()
    {
        return view('student.studentForm');
    }

    /** Store the form data */
    public function studentFormPost(Request $request)
    {
        $data = $request->all();
        $selectedDepartment = $data['dep'];
        $data['dep'] = $selectedDepartment;
        $user = studForm::create($data);

        if ($user) {
            // Data saved successfully, so redirect to the "dashboardPage"
            return redirect()->route('studentdashboardPage');
        } 
        else {
            // Data was not saved, redirect back to the form
            return redirect()->route('studentForm');
        }
    }
}
