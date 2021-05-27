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

<!--<div class="alert alert-success">
{{ session('success')}}
</div>-->
<script>
  alert('Your info was saved successfully');
</script>
@endif

@if(session('error'))

<!--<div class="alert alert-danger">
        {{ session('error')}}
</div>-->
<script>
  alert({{ session('error')}});
</script>
@endif
<form action="{{ route('store') }}" method="POST" enctype="multipart/form-data" class="form-target">

    <div class="container">
    <div class="row">

      <div class="col-md-12">

        <p class="text-danger"> Note: fields that are marked with asterics (*) are compulsory</P>
        
        </div> 
    <div class="col-md-12">
    <p style="font-style:bold;"><label for="website_name"><b>name of website *</b><label></p>
    <p><input type="text" title="Type in the  name of your website. no spaces allowed" name="website_name" required class="form-control" id=".keyup-websitename" maxlength="11"> </P>
    
    </div>
   
    <div class="col-md-12">
      <p style="font-style:bold;"><label for="title"><b>Logo text *</b><label></p>
      <p><input type="text" name="logo" maxlength="11" title="This will be placed in the logo section of your page"  class="form-control" id="logo"></P>
      
    </div>

      
    <div class="col-md-12">
      <p style="font-style:bold;"><label for="title"><b>Title *</b> <label></p>
      <p><input type="text" name="title" title="This will be placed in the title area of your page"  class="form-control" id="title"> </P>
      
    </div>

    <div class="col-md-12">
     <p> <select name="biz_type">
      <option>Select business type</option> 
    <option value="modelling">Modelling</option>
    <option value="service">Service</option>
    <option value="real-estate">Real Estate</option>
    <option value="Music-business">Music/Band</option>
    <option value="Fashion">Fashion</option>
    <option value="tech">Tech</option>
    <option value="other-service">Other service</option>
    <option value="retailing">Retailing business</option>
    <option value="Whosaling">Whosaling </option>
    <option value="Web-design">Web design and development</option>
    <option value="computer">Computer</option>
    <option value="internet">Internet </option>
    <option value="other">Other</option>
  </select></p>
      
    </div>

    
    
    <div class="col-md-12">
      
      <label for="about_img" class="btn btn-primary"><i class="icofont-camera"></i> Upload "About us"<input id="about_img" type="file" name="about_img"> </label>
      
    </div>
    <div class="col-md-12">
      <label for="banner_img" class="btn btn-primary"><i class="icofont-camera"></i> Upload banner image<input id="banner_img" type="file" name="banner_img"> </label>
      
    </div>


    <div class="col-md-12">
      <p style="font-style:bold;"><label for="banner_texts" ><b> Banner texts *</b><label></p>
      <p><input type="text" name="banner_texts" title="Type in the motto of your business" required class="form-control" id="banner_texts"></P>
      
    </div>

    <div class="col-md-12">
      <p style="font-style:bold;"><label for="biz_address" ><b>Business address *</b><label></p>
      <p><input type="text" name="biz_address" required class="form-control" id="biz_address"></P>
      
    </div>
    <div class="col-md-12 form-group">
    <p><label for="description"><b>About us *</b><label></p>
    <textarea  cols="30" rows="15" name="description" max="400" title="Describe your business for viewers" required id="description" class="form-control"></textarea>
      
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
       <p><input type="email" name="email" required id="email"class="form-control"></p>
        
      </div>

      <div class="col-md-12 form-group">
         <p><label for="facebook_link"><b>facebook link</b><label></p>
         <p><input type="text" placeholder="paste your facebook page link (optional)" name="facebook_link" id="facebook_link"class="form-control"></p>
          
        </div>

        <div class="col-md-12 form-group">
          <p><label for="instagram_link"><b>instagram link</b><label></p>
          <p><input type="text" placeholder="paste your instagram account link (optional)" name="instagram_link"  id="instagram_link" class="form-control"></p>
           
         </div>

         <div class="col-md-12 form-group">
          <p><label for="phone_number"><b>phone number *</b><label></p>
          <p><input type="tel" placeholder="put your business line " name="phone_number"  id="phone_number" class="form-control"></p>
           
         </div>
        <div class="col-md-12 form-group">
          <p><label for="whatsapp_link"><b>whatsapp number </b><label></p>
          <p><input type="tel" placeholder="put your whatsapp number (optional)" name="whatsapp_link"  id="whatsapp_link"class="form-control"></p>
           
         </div>

         <div class="col-md-12 form-group">
            @if(empty($find))
         <p><input type="hidden"  name="info_id" value="1"  class="form-control"></p>
            
             @else 

         <p><input type="hidden"  name="info_id" value="{{$find->id + 1}}"  class="form-control"></p>
             
             @endif
         </div>
    <div class="col-md-12 form-group">
     
      <input type="submit" value="Submit" class="btn btn-primary">
       
     </div>
     {{ csrf_field() }}
    </div>
    </div>
    
    </form>

@endsection()