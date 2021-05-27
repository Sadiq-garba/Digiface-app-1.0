<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\report;

class ReportController extends Controller
{
    public function viewReport(){

         return view('report'); 




    }



    public function storeReport(Request $request){
        $this->validate($request, [
            

            'user_link' => 'required|string',
            'email' => 'email|string',
            'complaint' => 'required|string'
            
           
      ]);
        
      $report = new report();
     $report->user_link=$request->input('user_link');
     $report->email=$request->input('email');
     $report->complaint=$request->input('complaint');

     $report->save();
    
     return back()->with('success', 'Your report has reached us, We are going to resolve the issue as quick as possible');
   }

}
