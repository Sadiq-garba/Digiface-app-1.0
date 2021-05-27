<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{  
    public static function createViewLog($post){
         
         
         $postViews = new PostView();
         $postViews->url= \Request::url();
         $postViews->session_id =\Request::getSession()->getId();
         
        
         $postViews->ip = \Request::getClientIp();
         $postViews->agent = \Request::header('user-agent');
         $postViews->save();
    }


    /*if(empty(\Auth::user()->id)){  
         
        $postViews->user_id = 0;

        } 
        else{
           $postViews->user_id = Auth::user()->id;  
        }*/
}
