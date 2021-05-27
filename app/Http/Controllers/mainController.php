<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\info;
use App\products;
use App\portfolio;
use App\User;
use App\ads;
use App\PostView;
use DB;
class mainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth', ['except'=> ['show','index']]);
    }
 
    public function index()
    {
        $biz=info::all();
     
        return view('index')->with('biz', $biz);
   
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        
        $id = auth()->user()->id;
        

        $data = DB::table('infos')->where('user_id',$id)->first();
         if(!empty( $data)){
            return redirect('home');
       
       
       //     $get_data = $data->user_id;
        
        /*if($id == $get_data){
        //return view('forms');
           return redirect('home');
        }else{

         return view('forms');

       }*/
   }else{
    return view('forms');

   }

     
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'website_name'=>'required|string|alpha_num',
            'title'=>'required|max:30',
            'email'=>'required|email',
            'banner_texts'=>'required|string',
            'description'=>'required',
            'phone_number'=>'required|numeric',
            'biz_address'=>'required|string',
            'banner_img'=>'image|nullable|max:1999',
            'about_img'=>'image|nullable|max:1999',
            'biz_type'=>'required|string'
         ]);
      
         if($request->hasFile('banner_img')){
             //get file name with extension
            $fileNameWithExt = $request->file('banner_img')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('banner_img')->getClientOriginalExtension();
            // file name to store
             $fileNameToStoreOne= $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('banner_img')->storeAs('public/banner_img', $fileNameToStoreOne);
            }else{
     
                $fileNameToStoreOne = 'noimage.jpeg';
            
         }

         
         if($request->hasFile('about_img')){
            //get file name with extension
           $fileNameWithExt = $request->file('about_img')->getClientOriginalName();
           //get just filename
           $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    
           //get just extension
           $extension = $request->file('about_img')->getClientOriginalExtension();
           // file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('about_img')->storeAs('public/about_img', $fileNameToStore);
           }else{
    
            $fileNameToStore = 'noimage.jpeg';
        
        }
 
      //create post
     $post = new info;
         
     $post->website_name =strtolower($request->input('website_name'));
     
     $post->title = $request->input('title');
 
     $post->email = $request->input('email');
     
     $post->banner_texts = $request->input('banner_texts');
     
     $post->description = $request->input('description');
     
     $post->phone_number = $request->input('phone_number');

     $post->biz_address = $request->input('biz_address');
      
     $post->instagram_link = $request->input('instagram_link');

     $post->facebook_link = $request->input('facebook_link');

     $post->whatsapp_link = $request->input('whatsapp_link');
   
     $post->biz_type = $request->input('biz_type');
     
     $post->logo = $request->input('logo');
     
     $post->about_img = $fileNameToStore;
     
     $post->user_id = auth()->user()->id; 
     
     $post->banner_img =  $fileNameToStoreOne;
    
    // $slug = new Slug;
     
     //$post->slug = $slug->createSlug($request->title);
    
     $post->save();
     
     return redirect('home')->with('success', 'your page created successfully');
     
    }
// create portfolio---------------------------------------------------

public function createPort($id)
   {  
            //$postOne = info::find($id);
            $post = portfolio::find($id);
           /* if(auth()->user()->id !== $postOne->user_id){
              return redirect('/posts')->with('error', 'Unathorized page');

          }*/
         // return view('edit')->with('post', $post);
    // $products = products::find($id);
         return view('port-form')->with('post', $post);
   }

   // store portfolio ----------------------------------------

   public function storePort(Request $request)
   {
       $this->validate($request, [
           
           'port_img'=>'image|nullable|max:1999',
           'caption'=>'required',
        ]);
     
        if($request->hasFile('port_img')){
            //get file name with extension
           $fileNameWithExt = $request->file('port_img')->getClientOriginalName();
           //get just filename
           $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    
           //get just extension
           $extension = $request->file('port_img')->getClientOriginalExtension();
           // file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('port_img')->storeAs('public/port_img', $fileNameToStore);
           }else{
    
            $fileNameToStore = 'noimage.jpeg';
           
        }

        
       

     //create post
    $post = new portfolio;
    
   
    
    $post->user_id = auth()->user()->id; 
  
    $post->caption = $request->input('caption');;
    
    $post->port_img = $fileNameToStore;
   
   // $slug = new Slug;
    
    //$post->slug = $slug->createSlug($request->title);
   
    $post->save();
    
    //return redirect('/home')->with('success', 'portfolio image uploaded');

    return back()->with('success', 'portfolio image uploaded');
    
   }

   // create product --------------------------------------------------------------------
   public function createProduct($id)
   {  
            //$postOne = info::find($id);
            $post = products::find($id);
           /* if(auth()->user()->id !== $postOne->user_id){
              return redirect('/posts')->with('error', 'Unathorized page');

          }*/
         // return view('edit')->with('post', $post);
    // $products = products::find($id);
         return view('product-form')->with('post', $post);
   }
    /* store pruduct -------------------------------------------------------------------------*/
    public function storeProduct(Request $request)
    {
        $this->validate($request, [
            'price'=>'required',
            'description'=>'required',
            'phone_number'=>'required',
            'prod_img'=>'image|nullable|max:1999',
            'product_name'=>'required'
         ]);
      
         if($request->hasFile('prod_img')){
             //get file name with extension
            $fileNameWithExt = $request->file('prod_img')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('prod_img')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('prod_img')->storeAs('public/prod_img', $fileNameToStore);
            }else{
     
             $fileNameToStore = 'noimage.jpeg';
            
         }

         
        
 
      //create post
     $post = new products;
     
     $post->price = $request->input('price');
     
     $post->description = $request->input('description');
     

     $post->phone_number = $request->input('phone_number');
     
     $post->product_name = $request->input('product_name');
     
     $post->user_id = auth()->user()->id; 
     
     $post->prod_img = $fileNameToStore;
    
    // $slug = new Slug;
     
     //$post->slug = $slug->createSlug($request->title);
    
     $post->save();
     
     //return redirect('/home')->with('success', 'product\'s details saved');
    // redirect('create-products/'.auth()->user()->id)
    return back()->with('success', 'product\'s details saved');
}

/*edit product--------------------------------------------------------*/
public function editProduct($id)
{  

        $post = products::find($id);
       if(auth()->user()->id !== $post->user_id){
         return redirect('/posts')->with('error', 'Unathorized page');

       }
      // return view('edit')->with('post', $post);
 // $products = products::find($id);
      return view('edit-product')->with('post', $post);
} 
/* update product ---------------------------------------------------*/

public function updateProduct(Request $request,$id)
    {
        $this->validate($request, [
            'price'=>'required',
            'description'=>'required',
            'phone_number'=>'required',
            'prod_img'=>'image|nullable|max:1999',
            'product_name'=>'required'
         ]);
      
         if($request->hasFile('prod_img')){
             //get file name with extension
            $fileNameWithExt = $request->file('prod_img')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('prod_img')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('prod_img')->storeAs('public/prod_img', $fileNameToStore);
            }else{
     
             $fileNameToStore = 'noimage.jpeg';
            
         }

         
        
 
      //create post
      $post = products::find($id);
     
     $post->price = $request->input('price');
     
     $post->description = $request->input('description');
     

     $post->phone_number = $request->input('phone_number');
     
     $post->product_name = $request->input('product_name');
     
     $post->user_id = auth()->user()->id; 
     
     $post->prod_img = $fileNameToStore;
    
    // $slug = new Slug;
     
     //$post->slug = $slug->createSlug($request->title);
    
     $post->save();
   //'create-products/'.auth()->user()->id)  
     return back()->with('success', 'product\'s info saved');
     
    }
     //-------------------------------------------------

      public function destroyProduct($id){

        $delete = products::where('id', $id);
        
        $delete->delete();

       // return redirect('/home')->with('success', 'Deleted');

       return back()->with('success', 'Deleted');

      }




     public function editPort($id){  

        $post = portfolio::find($id);
       if(auth()->user()->id !== $post->user_id){
         return redirect('/posts')->with('error', 'Unathorized page');

       }
      // return view('edit')->with('post', $post);
 // $products = products::find($id);
      return view('edit-port')->with('post', $post);
}
    /*Update portfolio ----------------------------------------------------------------*/
    public function updatePort(Request $request,$id)
    {
        $this->validate($request, [
           
            'port_img'=>'image|nullable|max:1999',
            'caption'=>'required'
         ]);
      
         if($request->hasFile('port_img')){
             //get file name with extension
            $fileNameWithExt = $request->file('port_img')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('port_img')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('port_img')->storeAs('public/port_img', $fileNameToStore);
            }else{
     
             $fileNameToStore = 'noimage.jpeg';
            
         }

         
        
 
      //create post
      $post = portfolio::find($id);
     
      $post->user_id = auth()->user()->id; 

      $post->caption = $request->input('caption');
     
     $post->port_img = $fileNameToStore;
    
    // $slug = new Slug;
     
     //$post->slug = $slug->createSlug($request->title);
    
     $post->save();
   //'create-products/'.auth()->user()->id)  
    // return redirect('/home')->with('success', 'portfolio image updated ');
     return back()->with('success', 'portfolio image updated ');
    }

    public function destroyPortfolio($id){

        $delete = portfolio::where('id', $id);
        
        $delete->delete();

       // return redirect('/home')->with('success', 'Deleted !');
       return back()->with('success', 'Deleted !');



      }

/*  ---------------------------------------------------*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */               //show($userid, $string)
    public function show($string)
    {  
        $find = DB::table('infos')->where('website_name',  $string)->first();
        //$get_id = DB::table('products')->where('user_id',  $userid)->first();
        //$find = info::find($string);
        // $userid = Auth::user()->id;
         $get_id = $find->user_id; 
         $ads = ads::orderBy('created_at','desc')->get();

         $user_1 = User::find($get_id); 
         //$post = products::where($id);
         postView::createViewLog($find);
         
         return view('template.business-temp')->with('web', $find)->with('detail' , $user_1->product)->with('port', $user_1->portfolio)->with('ad',$ads);
         //->with('detail' , $user_1->product)->with('port', $user_1->portfolio);
          //return view('template.business-temp');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
              
          $post = info::find($id);
          if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unathorized page');

          }
          return view('edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'website_name'=>'required',
            'title'=>'required',
            'email'=>'required',
            'banner_texts'=>'required',
            'description'=>'required',
            'phone_number'=>'required|numeric',
            'biz_address'=>'required',
            'banner_img'=>'image|nullable|max:1999',
            'about_img'=>'image|nullable|max:1999',
            'whatsapp_link'=>'numeric'
           // 'biz_type'=>'required'
         ]);
      
         if($request->hasFile('banner_img')){
             //get file name with extension
            $fileNameWithExt = $request->file('banner_img')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('banner_img')->getClientOriginalExtension();
            // file name to store
            $fileNameToStoreOne = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('banner_img')->storeAs('public/banner_img', $fileNameToStoreOne);
            }else{
     
                $fileNameToStoreOne = 'noimage.jpeg';
            
                 }

         
         if($request->hasFile('about_img')){
            //get file name with extension
           $fileNameWithExt = $request->file('about_img')->getClientOriginalName();
           //get just filename
           $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
    
           //get just extension
           $extension = $request->file('about_img')->getClientOriginalExtension();
           // file name to store
           $fileNameToStore = $filename.'_'.time().'.'.$extension;
           //upload image
           $path = $request->file('about_img')->storeAs('public/about_img', $fileNameToStore);
           }else{
    
            $fileNameToStore = 'noimage.jpeg';
        
        }
 
      //create post
     $post = info::find($id);
     
     $post->website_name = strtolower( $request->input('website_name'));
     
     $post->title = $request->input('title');
 
     $post->email = $request->input('email');
     
     $post->banner_texts = $request->input('banner_texts');
     
     $post->description = $request->input('description');
     
     $post->phone_number = $request->input('phone_number');

     $post->biz_address = $request->input('biz_address');
      
     $post->instagram_link = $request->input('instagram_link');

     $post->facebook_link = $request->input('facebook_link');

     $post->whatsapp_link = $request->input('whatsapp_link');
     
     //$post->biz_type = $request->input('biz_type');
     
     $post->logo = $request->input('logo');
     
     if(!empty($fileNameToStore)){
     $post->about_img = $fileNameToStore;
     }
    
     $post->user_id = auth()->user()->id; 
    
     if(!empty($fileNameToStoreOne)){
     $post->banner_img =  $fileNameToStoreOne;
    }
    // $slug = new Slug;
     
     //$post->slug = $slug->createSlug($request->title);
    
     $post->save();
     
     return redirect('/home')->with('success', 'Page updated');
     
    }



   // --------------------------------------------------------------------
  
    /* store pruduct -------------------------------------------------------------------------*/
   /* public function storeProduct(Request $request)
    {
        $this->validate($request, [
            'price'=>'required',
            'description'=>'required',
            'phone_number'=>'required',
            'prod_img'=>'image|nullable|max:1999'
         ]);
      
         if($request->hasFile('prod_img')){
             //get file name with extension
            $fileNameWithExt = $request->file('prod_img')->getClientOriginalName();
            //get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
     
            //get just extension
            $extension = $request->file('prod_img')->getClientOriginalExtension();
            // file name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('prod_img')->storeAs('public/prod_img', $fileNameToStore);
            }else{
     
             $fileNameToStore = 'noimage.jpeg';
            
         }*/

         
        
 
      //create post
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//-------------------------------------------------- 


//---------------------------------------------------
    public function destroy($id)
    {
        $delete = info::where('id', $id);
        
        $delete->delete();

        return redirect('/home')->with('success', 'Your page has been deleted');
    }
}
