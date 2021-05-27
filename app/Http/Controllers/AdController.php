<?php

namespace App\Http\Controllers;
use App\ads;
use Illuminate\Http\Request;

class AdController extends Controller
{   



    public function __construct()
    {
        $this->middleware('auth', ['except'=> ['show']]);
    }

    public function get_ad(){


      return view('ad-pay');


    }

    public function store(Request $request){


        $this->validate($request, [
           
            'adImage'=>'image|nullable|max:1999',
            //|dimensions:max_width=300,max_height=300
         ]);
      
         if($request->hasFile('adImage')){
             //get file name with extension
            $fileNameWithExt = $request->file('adImage')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('adImage')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('adImage')->storeAs('public/ads', $fileNameToStore);
            }else{
     
             $fileNameToStore = 'noimage.jpeg';
            
         }
 
         
        
 
      //create post
     $ads = new ads;
     
    
     
     $ads->user_id = auth()->user()->id; 
   
     $ads->link = $request->input('link');
     
     $ads->banner_img = $fileNameToStore;
    
    // $slug = new Slug;
     
     //$post->slug = $slug->createSlug($request->title);
    
     $ads->save();
     
     return back()->with('success', 'Suceess, your Ad has been uploaded. Your ad will appear on our free one page platform');
     





     }

    public function upload(){


     return view('upload-ad');



    }




   
}
