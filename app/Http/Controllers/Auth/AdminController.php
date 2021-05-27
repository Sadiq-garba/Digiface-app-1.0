<?php

namespace App\Http\Controllers\Auth;
use App\Admin;
use App\premium;
use App\image;
use App\ads;
use App\report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * show dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $clients = premium::orderBy('created_at','desc')->paginate(5);


        return view('admin')->with('clients', $clients);
    }




    public function reportView()
    {   $report = report::orderBy('created_at','desc')->paginate(2);
        
        return view('report-view')->with('reports', $report);
    }
     

    public function show($id)
    {    
       // $clients = Admin::orderBy('created_at','desc')->get();
        // $prem = premium::where('user_id', $id)->first();
        $prem = premium::find($id);

         $img = image::where('user_id', $id)->get();
        
         return view('client')->with('prem', $prem)->with('img', $img);
   
   
    }



    public function adlist()
    {    
        $clients_ads = ads::orderBy('created_at','desc')->paginate(3);
        return view('ads-list')->with('ad', $clients_ads);
    }






}
