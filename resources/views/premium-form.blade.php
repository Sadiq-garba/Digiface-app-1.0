@extends('layouts.layout')

@section('content')

@if(count($errors)>0)

@foreach($errors->all() as $error)

<div class="alert alert-danger">
        {{ $error }}
</div>


@endforeach

@endif

@if(session('success'))
<!--<script>
alert('your transaction was successful');
</script>        -->
<div class="alert alert-success">
 
<p class="text-center">{{session('success')}}</p>
<script>

alert('{{session('success')}}');

var audio = new Audio("files/suceess.mp3");
audio.play();
</script>


</div>
@else  

 <!--<script> window.location="{{ route('index')  }}";</script>-->

 
 @endif

@if(session('error'))

<div class="alert alert-danger" >
        {{ session('error')}}
</div>
@endif
<form action="{{ route('premium.store') }}" method="POST" enctype="multipart/form-data">

    <div class="container" style="padding-top:50px;">
   
       <div class="row">
       <div class="col-md-8" style="padding:30px;">        
        <div class="card">
               <!-- <div class="card-header">
                  Featured
                </div>-->
                <div class="card-body">
                  <h1 class="card-title text-danger">Fill out this form</h1>
                  <p class="card-text">This will help us design your website</p>
                 
                </div>
              </div>
        </div>
        <div class="col-md-8 form-group">
        
                <label for="phone_number">Phone number</label>
                <input type="tel" id="phone_number" name="phone_number" placeholder="eg +234807733097" class="form-control">
        </div>
        <div class="col-md-8 form-group">
          @if(!empty(Auth::user()->id))
          <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" value="{{Auth::user()->email}}">
        @else   
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control">
        @endif
       </div>
       
      

        <div class="col-md-12 form-group">
        <textarea name="description" cols="40" rows="10" placeholder="  Give description on how you want your website to be designed"></textarea>
        </div>
        <div class="col-md-12 form-group">
        <p class="text-danger"> Upload your write up on the about us section,
         services you offer and contact details</p>

         <p class="text-danger">This will fill this information in the website</p>
         
        </div>       
        
        

        <div class="col-md-12 form-group">
          
                <label for="write_up" class="btn btn-primary"><i class="icofont-camera"></i> Upload write up doc<input id="write_up" type="file" name="write_up"> </label>
        </div>
        <div class="col-md-8 form-group">
                <label><i class="icofont-youtube"></i>Youtube video link</label>
            <input type="text" name="youtube_link" placeholder="optional"  class="form-control">
        </div>
        <div class="col-md-8 form-group">
                <label><i class="icofont-instagram"></i> Instagram account link</label>
            <input type="text" name="instagram_link" placeholder="optional" class="form-control">
        </div>

        <div class="col-md-8 form-group">
                <label><i class="icofont-facebook"></i> Facebook page link</label>
            <input type="text" name="facebook_link" placeholder="optional" class="form-control">
        </div>
          <div class="col-md-8 form-group">
        
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}" class="form-control">
        </div>
       <div class="col-md-8"> 
        <p class="text-center"><i style="font-size:27px; color:goldenrod;" class="icofont-image"></i></p>
        <p class="text-center">Upload logo and other images you would like us to include in your websites</p>
        <p class="text-center">Remember, only upload high quality images</p>
        <p><label for="images" class="btn btn-primary center-button"><i style="font-size:27px; color:goldenrod;" class="icofont-upload"></i> Upload images<input id="images" type="file" name="images[]" multiple></p>
       </div>


    <div class="col-md-12 form-group">
     
      <input type="submit" value="Submit" class="btn btn-primary">
       
     </div>
     {{ csrf_field() }}
    </div>
    </div>
    
    </form>
   <!--<script>
    alert('Your product info is saved successfully');  


   </script>-->
@endsection()