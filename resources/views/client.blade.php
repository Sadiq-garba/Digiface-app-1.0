@extends('layouts.layout')
@section('content')


<div class="container">
<div class="row">

  
  
       
  @if(!empty($prem))
 
         <div class="col-md-8 col-12" style="padding:40px;">
             <div class="card">
                 <div class="card-header">
                   
        
               </div>
               <!-- Card content -->
               
               
             <!-- <h3>client info</h3>-->
                 
                  
                  
             <div class="card-body">
                <p>Phone number: {{$prem->phone_number}}</p>
                <p>Email: <a href="mailto:{{$prem->email}}">{{$prem->email}}</a></p>
             <p>Download file: <a href="{{url('storage/banner_pics')}}/{{$prem->write_up}}" download>{{$prem->write_up}}</a></p>
             <p>Description: {{$prem->description}}</p>  
             @if(!empty($prem->images))
             @foreach(json_decode($prem->images, true) as $imgs)
             <img src="{{url('/files')}}/{{$imgs}}" width="100" height="100" style="padding:10px;">
          
            
              @endforeach
              @endif 
             </div>  
        
        
             </div>
       </div>
     
   @else  

   <h1>NO DATA</h1>

   @endif



    <div class="col-md-12">
      
    </div> 


</div>
</div>
















@endsection