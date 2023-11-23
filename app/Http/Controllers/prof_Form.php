<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\prof_Form_Model;

class prof_Form extends Controller
{
    /** Display the form */
    public function proForm()
    {
        return view('faculty.proForm');
    }

    /** Store the form data */
    public function proFormPost(Request $request)
    {
        $data = $request->all();
        $data['dep'] = 'CCMS';
        $user = prof_Form_Model::create($data);

        if ($user) {
            // Data saved successfully, so redirect to the "dashboardPage"
            return redirect()->route('dashboardPage');
        } 
        else {
            // Data was not saved, redirect back to the form
            return redirect()->route('proForm');
        }
    }
}
