@extends('layouts.layout')

@section('content')


@if(session('success'))
<!--<script>
alert('your transaction was successful');
</script> -->
<div class="alert alert-success">
<p class="text-center">{{session('success')}}</p>
<script> alert('{{session('success')}}')

var audio = new Audio('files/success.mp3');
audio.play();

</script>
</div>
@endif

 <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8 wow bounceIn" style="padding:40px;">
            <div class="card">
                <div class="text-center card-header"> Log in your complaint </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeReport') }}">
                        @csrf

                        <div class="form-group row" style="padding-top:20px;">
                           

                            <div class="col-md-8">
                                <label><b>Email</b></label>
                                <input id="email" placeholder="Your email" type="example@gmail.com" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="form-group row" style="padding-top:20px;">
                           

                            <div class="col-md-8">
                                <label><b>Offender's page url link</b></label>
                                <input id="user_link" placeholder="https://www.digiface.com/pages/example" type="user_link" class="form-control @error('user_link') is-invalid @enderror" name="user_link" value="{{ old('user_link') }}" required>

                                @error('user_link')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                        </div>


                        <div class="form-group row" style="padding-top:10px;"> 
                            

                            <div class="col-md-6">
                               <textarea name="complaint" id="complaint" placeholder="State your complain"></textarea>

                                @error('complaint')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Report') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>





@endsection