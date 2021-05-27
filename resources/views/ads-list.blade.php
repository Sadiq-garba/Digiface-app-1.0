@extends('layouts.layout')
@section('content')


<div class="container">
<div class="row justify-content-center">

  

       
  @if(!empty($ad))
    @foreach($ad as $ads)
         <div class="col-md-8 col-12">
             <div class="card" >
                 <div class="card-header">
                 <h3>Client ID: {{$ads->user_id}}</h3>
        
               </div>
               <!-- Card content -->
               
               
             <!-- <h3>client info</h3>-->
                 
                  
                  
             <div class="card-body">
                  <p>Amount paid paid: $394</p>
                  
               
                  
                  <img src="{{asset('storage/ads')}}/{{$ads->banner_img}}" width="400" height="400">

                  
             </div>   
        
        
             </div>
         </div>
         
       @endforeach
       

      </div>
      {{$ad->links()}}
    </div> 
    @endif
    @endsection