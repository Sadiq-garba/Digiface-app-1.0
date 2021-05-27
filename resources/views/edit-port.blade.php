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

<div class="alert alert-success">
{{ session('success')}}
</div>
@endif

@if(session('error'))

<div class=" alert alert-danger ">
        {{ session('error')}}
</div>
@endif
@if(!empty($post))
<form action="{!! route('update.portfolio', $post->id) !!}" method="POST" enctype="multipart/form-data">

    <div class="container">
    <div class="row">

      

        <div class="col-md-12 form-group">
          <!--<p><label for="port_img"><b> add portfolio image *</b><label></p>-->
                <label for="port_img" class="btn btn-primary"><i class="icofont-camera"></i> Upload portfolio image<input id="port_img" type="file" name="port_img" value="{{$post->port_img}}"> </label>
        </div>

        <div class="col-md-12 form-group">
                <textarea cols="30" rows="8" name="caption" placeholder="write your caption...."></textarea>
        </div>
        
    <div class="col-md-12 form-group">
     
      <input type="submit" value="Submit" class="btn btn-primary">
       
     </div>
     {{ csrf_field() }}
    </div>
    </div>
    
    </form>
    @endif
   <!--<script>
    alert('Your product info is saved successfully');  


   </script>-->
@endsection()