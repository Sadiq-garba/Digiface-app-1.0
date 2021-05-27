<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\info;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {    $user_id = auth()->user()->id;
         $user_1 = User::find($user_id);
        $check = info::where('user_id', $user_id)->first();
        // $user_1 = User::find($user_id)->first(); 
        return view('home')->with('post' ,$user_1->info)->with('detail' , $user_1->product)->with('check',$check);
    }
}
