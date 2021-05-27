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

<div class="alert alert-danger" >
        {{ session('error')}}
</div>
@endif
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">

    <div class="container" style="padding-top:50px;">
    <div class="row">

      <div class="col-md-12">

        <p class="text-danger"> Note: fields that are marked with asterics (*) are compulsory</P>
        
        </div>
        <div class="col-md-12">
          <p style="font-style:bold;"><label for="product_name"><b>product name *</b><label></p>
          <p><input type="text" name="product_name" required class="form-control" id="price" > </P>
          
          </div> 
    
          <div class="col-md-12">
    <p style="font-style:bold;"><label for="price"><b>price *</b><label></p>
    <p><input type="text" name="price" required class="form-control" id="price" > </P>
    
    </div>
   
    

      
    
    <div class="col-md-12 form-group">
    <p><label for="description"><b> Product description *</b><label></p>
    <textarea  cols="30" rows="15" name="description" required id="description" class="form-control"></textarea>
      
    </div>
    <!--<div class="col-md-12 form-group">
      <select name="marital_status" style="padding:10px; background-color:rgb(69, 69, 238); color:white;">
           <option value="">choose marital status</option>  
           <option value="single"> Single</option>  
           <option value="married"> married </option>  
       </select>  
    </div>-->
    
    
   

         <div class="col-md-12 form-group">
          <p><label for="phone_number"><b>phone number *</b><label></p>
          <p><input type="tel" placeholder="put your business line (optional)" name="phone_number"  id="phone_number" class="form-control"></p>
        </div>

        <div class="col-md-12 form-group">
          
            <label for="prod_img" class="btn btn-primary"><i class="icofont-camera"></i> Upload image of product<input id="prod_img" type="file" name="prod_img"></label>
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