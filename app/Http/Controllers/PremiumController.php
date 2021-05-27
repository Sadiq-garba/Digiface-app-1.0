<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\premium;
use App\image;
use App\User;
class PremiumController extends Controller
{
  
  
  public function __construct()
  {
      $this->middleware('auth', ['except'=> ['show']]);
  }



  public function Getform(){


   return view('premium-form');



  }

  public function premiumSave(Request $request)
  {


      $this->validate($request, [
            
              'write_up' => 'mimes:doc,pdf,docx,zip',
              'youtube_link' => 'required|string',
              'facebook_link' => 'required|string',
              'instagram_link' => 'required|string',
              'phone_number' => 'required|numeric',
              'email'=>'required|string',
              'description'=>'required|string',
              //'images'=>'image|nullable|max:1999'
              //'service_imgs' => 'required',
              //'service_imgs.*' =>'image|nullable|max:1999', //'mimes:doc,pdf,docx,zip'
              //'banner_img' =>'image|nullable|max:1999',
              //'logo_img' =>'image|nullable|max:1999'
        ]);
        /*if($request->hasFile('logo_img')){
          //get file name with extension
         $fileNameWithExt = $request->file('logo_img')->getClientOriginalName();
         //get just filename
         $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
  
         //get just extension
         $extension = $request->file('logo_img')->getClientOriginalExtension();
         // file name to store
         $fileNameToStore = $filename.'_'.time().'.'.$extension;
         //upload image
         $path = $request->file('logo_img')->storeAs('public/logo_images', $fileNameToStore);
         }else{
  
          $fileNameToStore = 'noimage.jpeg';
      
      }*/


     /* if($request->hasFile('banner_img')){
        //get file name with extension
       $fileNameWithExt = $request->file('banner_img')->getClientOriginalName();
       //get just filename
       $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

       //get just extension
       $extension = $request->file('banner_img')->getClientOriginalExtension();
       // file name to store
       $fileNameToStoreOne = $filename.'_'.time().'.'.$extension;
       //upload image
       $path = $request->file('banner_img')->storeAs('public/banner_pics', $fileNameToStoreOne);
       }else{

        $fileNameToStoreOne = 'noimage.jpeg';
    
    }*/


     /* if($request->hasfile('service_imgs'))
       {
          foreach($request->file('service_imgs') as $file)
          {
              $name = time().'.'.$file->extension();
              $file->move(public_path().'/files/', $name);  
              $data[] = $name;  
          }
       }*/
       if($request->hasfile('images'))
         {
            foreach($request->file('images') as $file)
            { 

              $name = rand(400,700). time().'.'.$file->extension();
              $file->move(public_path().'/files/', $name);  
              $data[] = $name;  
            }
         }


      if($request->hasFile('write_up')){
        //get file name with extension
       $fileNameWithExt = $request->file('write_up')->getClientOriginalName();
       //get just filename
       $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

       //get just extension
       $extension = $request->file('write_up')->getClientOriginalExtension();
       // file name to store
       $fileNameToStoreOne = $filename.'_'.time().'.'.$extension;
       //upload image
       $path = $request->file('write_up')->storeAs('public/banner_pics', $fileNameToStoreOne);
       }else{

        $fileNameToStoreOne = 'noimage.jpeg';
    
    }


       $upload = new premium();
       $upload->write_up = $fileNameToStoreOne;
      // $upload->banner_img = $fileNameToStoreOne;
      // $upload->logo = $fileNameToStore;
       $upload->phone_number = $request->input('phone_number');
       $upload->email = $request->input('email');
       $upload->instagram_link = $request->input('instagram_link');
       $upload->facebook_link = $request->input('facebook_link');
       $upload->youtube_link = $request->input('facebook_link');
       $upload->description = $request->input('description');
       $upload->user_id =  $request->input('user_id');
       $upload->images = json_encode($data);
      
       // $upload->service_imgs= json_encode($data);
       $upload->save();


      return back()->with('success', 'Success, we will get in touch with you in 30 minutes time');
  }

  
  public function uploadImage(){

    return view('upload-image');


  }

  public function saveImage(Request $request){


    //$this->validate($request, [
            
      //'file' => 'image|nullable|max:1999',
      
      //'service_imgs' => 'required',
      //'service_imgs.*' =>'image|nullable|max:1999', //'mimes:doc,pdf,docx,zip'
      //'banner_img' =>'image|nullable|max:1999',
      //'logo_img' =>'image|nullable|max:1999'
//]);
if($request->hasfile('images'))
         {
            foreach($request->file('images') as $file)
            { 

              $name = rand(400,700). time().'.'.$file->extension();
              $file->move(public_path().'/files/', $name);  
              $data[] = $name;  
            }
         }


        // $file= new File();
        // $file->filenames=json_encode($data);
         //$file->save();
    
     $save = new image();
     $save->user_id = auth()->user()->id; 
     $save->filename = json_encode($data);
     
     $save->save();
      
    // return response()->json(['success' => $fileNameToStoretwo]);
       return back()->with('success','Success, we will call you in an hours time',);
  
  }




}


