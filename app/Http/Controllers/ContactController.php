<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class ContactController extends Controller
{   




    public function getContact(){



        return view('contact');
   
   
   
       }
  
    public function postContact(Request $request){
        $this->validate($request, ['email' => 'required|email'] );

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bodyMessage' => $request->message
        );

        Mail::send('contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('sadiq.garba305@gmail.com');
            $message->subject('Contact Details');
        });

        return response()->json(['success' => 'Your E-mail was sent!'], 200);

    }


   





}
