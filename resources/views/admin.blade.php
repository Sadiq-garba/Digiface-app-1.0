@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       
         @if(count($clients) > 0)
          @foreach($clients as $client)
         <div class="col-md-8 col-12" style="padding:40px;">
             <div class="card" >
                 <div class="card-header">
                    <h3>Client ID: {{$client->id}}</h3>
        
               </div>
               <!-- Card content -->
               
               
             <!-- <h3>client info</h3>-->
                 
                  
                  
             <div class="card-body">
                <p>Phone number: {{$client->phone_number}}</p>
                <p>Emali: <a href="mailto:{{$client->email}}">{{$client->email}}</a></p>
                <p> <a href="{{url('admin')}}/client/{{$client->id}}" class="btn btn-primary">Show</a></p>
             </div>   
        
        
             </div>
       </div>
                  @endforeach
                  @else   

                  <h1>SORRY, NO DATA FOUND !!!</h1>
                  
                  
                  
                  
                  
                  @endif

   </div>
{{$clients->links()}}
</div>
@endsection
