@extends('layouts.layout')

@section('content')





<div class="row justify-content-center">
       
    @if(count($reports) > 0)
     @foreach($reports as $report)
    <div class="col-md-8 col-12" style="padding:40px;">
        <div class="card" >
            <div class="card-header">
               <h3>From : {{$report->email}}</h3>
   
          </div>
          <!-- Card content -->
          
          
        <!-- <h3>client info</h3>-->
            
             
             
        <div class="card-body">
           <p>User's link: {{$report->user_link}}</p>
           <p>Complaint: {{$report->complaint}}</p>
    </div>   
   
   
        </div>

  </div>

  
             
  @endforeach
  <div class="col-md-8 col-12">

    {{$reports->links()}}
   
     </div>
  @else   

  <h1>SORRY, NO DATA FOUND !!!</h1>
  
  
  
  
  
  @endif


@endsection