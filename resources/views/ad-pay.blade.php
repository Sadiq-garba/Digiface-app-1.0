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

<div class="container">
        <div class="row justify-content-center"  style="padding-top:150px;">
                <div class="col-md-8">
                    <div class="card">
                      
        
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                           <!-- <p class="text-success">You are about to pay for corporate website</p>-->
                         <h4 class="text-success">Place a 300x300 Banner ad for $200 a month</h4>
                        </div>
                       <div class="card-footer">
                        why use us ? we get 50,000 visitors per day. Our platform is the best way to create awareness for your business
                    </div>
                </div>
         </div>
            </div>        
<div class="row justify-content-center">  
<div class="col-md-8">                
<form action="{{ url('charge') }}" method="post" style="padding-top:100px;">
        <div class="row">
        <div class="col-md-8">
         
        
        <input type="hidden" name="amount" value="200" />
        <input type="hidden" name="payment_type" value="ads" />
       <!-- <input type="hidden" name="PayerID" />
        <input type="hidden" name="paymentId" />-->
        {{ csrf_field() }}
        </div>
        <div class="col-md-8" style="padding-top:10px;">  
       <!--<i class="icofont-money"><input type="submit" class="btn btn-primary" name="submit" value="Pay Now"></i>-->
       <input type="submit" class="btn btn-primary" name="submit" value="Pay Now">
       </div>
       </div>
</form>
</div> 
</div> 
</div>
<!--<script>
 alert('Your product info is saved successfully');  


</script>-->
@endsection()