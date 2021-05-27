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
</script> -->
<div class="alert alert-success">
<p class="text-center">{{session('success')}}</p>
<script> alert('{{session('success')}}');

var audio = new Audio('files/success.mp3');
audio.play();

</script>
</div>
@else  

 <script> window.location="{{ route('index')  }}";

</script> 

 
 @endif

@if(session('error'))

<div class="alert alert-danger">
        {{ session('error')}}
</div>
@endif  
      <div class="container">
        <div class="row justify-content-center" style="padding-top:50px;">
            <div class="col-md-8">
           <form action="{{ route('image.store') }}" method="POST"  enctype="multipart/form-data">

           
            <p class="text-center"><i style="font-size:27px; color:goldenrod;" class="icofont-image"></i></p>
            <p class="text-center">Upload logo and other images you would like us to include in your websites</p>
            <p class="text-center">Remember, only upload high quality images</p>
            <p><label for="images" class="btn btn-primary center-button"><i style="font-size:27px; color:goldenrod;" class="icofont-upload"></i> Upload images<input id="images" type="file" name="images[]" multiple></p>
             <!--<button class="btn btn-primary center-button" id="images" type="file" name="images[]" >Upload</button>-->
              
             <p><input type="submit" class="btn btn-success center-button" value="submit"></p>
              {{ csrf_field() }}
           </form>
          </div>
        </div>
      </div>

    
   <!--<script>
    alert('Your product info is saved successfully');  


   </script>-->

@endsection