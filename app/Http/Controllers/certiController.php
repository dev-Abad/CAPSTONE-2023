<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\certiModel;

class certiController extends Controller
{
    public  function uploadImages(){     
        $certi = certiController::getCerti();
        
        return view('student/certiButton', ["data"=>$certi]);
    }

    public static function getCerti($limit=30)
    {
        $uid  = Auth::user()->id;
        $certi = certiModel::Where('user_id', $uid)->orderBy('id', 'DESC')->limit($limit)->get();
        return $certi;
    }

    public function store(Request $request)
    {
        foreach($request->input('document', []) as $file) {
            //your file to be uploaded
            return $file;
        }
    }
    public function uploadImagesPost(Request $req)
    {     
        try {
            print_r($req->all());
            $this->validate($req,[
                'images' => 'required',
                'images.*' => 'image|mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:8048'
            ]);

              if($req->hasfile('images')) {                   
                  $uid  = Auth::user()->id;
                  foreach($req->file('images') as $key => $file)
                  {
                      $img = $file;
                      $name = time().'_'.$img->getClientOriginalName();                      
                      $path = $img->move('storage/certifiles', $name);
                      $insert[$key]['user_id'] = $uid;
                      $insert[$key]['file_name'] = $name;
                  }                  
                certiModel::insert($insert);

                //   $fileModal->save();
                 return back()->with('success', 'File has successfully uploaded!');
              }
            //   else  return back()->with('fail', 'File has failed to upload!');
          } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
            
            //   return $e->getMessage();
          }       
    }
}