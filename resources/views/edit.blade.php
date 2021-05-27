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

<div class="alert alert-danger">
        {{ session('error')}}
</div>
@endif
@if(!empty($post))
<form action="{!! route('update', $post->id) !!}" method="POST" enctype="multipart/form-data">
       
    <div class="container">
    <div class="row">
      
      <div class="col-md-12">

        <p class="text-danger"> Note: fields that are marked with asterics (*) are compulsory</P>
        
        </div> 
        
    <div class="col-md-12">
    <p style="font-style:bold;"><label for="website_name"><b>name of website *</b><label></p>
    <p><input type="text" name="website_name" value="{{$post->website_name}}" required class="form-control" maxlength="11" id="website_name"> </P>
    
    </div>
   
    <div class="col-md-12">
      <p style="font-style:bold;"><label for="title"><b>Logo text *</b><label></p>
      <p><input type="text" name="logo" value="{{$post->logo}}"  maxlength="11" class="form-control" id="logo"></P>
      
    </div>

   <!-- <div class="col-md-12">
     <p><select name="biz_type" class="dropdown">
    <option>Select Business type</option>
    <option value="Barbing shop">Barbing shop</option>
    <option value="modelling">Modelling</option>
    <option value="Tailoring shop">Tailoring shop</option>
    <option value="Hair dressing">Hair dressing</option>
    <option value="Real Estate">Real Estae</option>
    <option value="Music business">Music Business</option>
    <option value="Fashion">Fashion</option>
    <option value="phone-tech">Phones and other techs</option>
    <option value="other-service">Other service</option>
    <option value="retailing">Retailing business</option>
    <option value="Whosale">Whosale </option>
    <option value="Web design">Web design </option>
    <option value="graphic design">Graphic design </option>
    <option value="internet">Internet </option>
    <option value="internet">Other</option>
  </select></p>


    </div>-->
    <div class="col-md-12">
      <p style="font-style:bold;"><label for="title"><b>Title *</b> <label></p>
      <p><input type="text" name="title" value="{{$post->title}}"  class="form-control" id="title"> </P>
      
    </div>

    <div class="col-md-12">
      
      <p class="text-danger">For best result only upload high resolution images for the "about us " side image </p>
       
     </div>
    
    <div class="col-md-12">
      
      <!--<p style="font-style:bold;"><label for="about_img" ><b> select "about us Image" *</b><label></p>-->
        <label for="about_img" class="btn btn-primary"><i class="icofont-upload"></i> Upload about us image<input id="about_img" type="file" name="about_img" value="{{$post->about_img}}"> </label>
      
    </div>

    <div class="col-md-12">
      
     <p class="text-danger">For best result only upload high resolution images for the Banner </p>
      
    </div>
    <div class="col-md-12">
      
      <!--<p style="font-style:bold;"><label for="banner_img" ><b> select banner Image *</b><label></p>-->
      <label for="banner" class="btn btn-primary"><i class="icofont-upload"></i> Upload banner image<input id="banner" type="file" name="banner_img" value="{{$post->banner_img}}"> </label>
      
    </div>


    <div class="col-md-12">
      <p style="font-style:bold;"><label for="banner_texts" ><b> Banner texts *</b><label></p>
      <p><input type="text" name="banner_texts" value="{{$post->banner_texts}}" required class="form-control" id="banner_texts"></P>
      
    </div>

    <div class="col-md-12">
      <p style="font-style:bold;"><label for="biz_address" ><b>Business address *</b><label></p>
      <p><input type="text" name="biz_address" value="{{$post->biz_address}}" required class="form-control" id="biz_address"></P>
      
    </div>
    <div class="col-md-12 form-group">
    <p><label for="description"><b>About us *</b><label></p>
    <textarea  cols="30" rows="15" max="400" name="description" required id="description" class="form-control">{{$post->description}}</textarea>
      
    </div>
    <!--<div class="col-md-12 form-group">
      <select name="marital_status" style="padding:10px; background-color:rgb(69, 69, 238); color:white;">
           <option value="">choose marital status</option>  
           <option value="single"> Single</option>  
           <option value="married"> married </option>  
       </select>  
    </div>-->
    
    
    
    <div class="col-md-12 form-group">
      <p><label for="email"><b>Email *</b><label></p>
       <p><input type="email" name="email" value="{{$post->email}}" required id="email"class="form-control"></p>
        
      </div>

      <div class="col-md-12 form-group">
         <p><label for="facebook_link"><b>facebook link</b><label></p>
         <p><input type="text" name="facebook_link" value="{{$post->facebook_link}}" id="facebook_link"class="form-control"></p>
          
        </div>

        <div class="col-md-12 form-group">
          <p><label for="instagram_link"><b>instagram link</b><label></p>
          <p><input type="text" value="{{$post->instagram_link}}" placeholder="paste your instagram account link (optional)" name="instagram_link"  id="instagram_link" class="form-control"></p>
           
         </div>

         <div class="col-md-12 form-group">
          <p><label for="phone_number"><b>phone number *</b><label></p>
          <p><input type="tel" value="{{$post->phone_number}}"  placeholder="put your business line (optional)" name="phone_number"  id="phone_number" class="form-control"></p>
           
         </div>
        <div class="col-md-12 form-group">
          <p><label for="whatsapp_link"><b>whatsapp number </b><label></p>
          <p><input type="tel" value="{{$post->whatsapp_link}}" placeholder="put your whatsapp number (optional)" name="whatsapp_link"  id="whatsapp_link"class="form-control"></p>
           
         </div>
    <div class="col-md-12 form-group">
     
      <input type="submit" value="Submit" class="btn btn-primary">
       
     </div>
     
     {{ csrf_field() }}
    </div>
    @endif
    </div>
    
    </form>

@endsection()