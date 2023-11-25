<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Models\certiModel;
use App\Models\User;

class certiController extends Controller
{
    function uploadImages(){
        return view('student/certi');
    }

    public function uploadImagesPost(Request $request)
    {
        $this->ensureCertificateImagesDirectory();
        $user = Auth::user();

        if ($request->hasFile('Image')) {
            $images = $request->file('Image');

            foreach ($images as $image) {
                $imageName = uniqid('certificate_') . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('certificate_images', $imageName);

                $certificate = new certiModel();
                $certificate->user_name = $user->name; // Assigning user name instead of ID
                $certificate->image_path = $imagePath;
                $certificate->save();
            }

            // Retrieve certificates for the currently logged-in user
            $certificates = certiModel::where('user_name', $user->name)->get();

            return view('student.certiButton')->with(compact('certificates'));
        }

        return redirect()->back()->with('error', 'No images selected for upload.');
    }


    // Helper method to ensure the directory exists
    public function ensureCertificateImagesDirectory()
    {
        $directory = 'certificate_images';

        if (!Storage::exists($directory)) {
            Storage::makeDirectory($directory);
        }
    }
}

