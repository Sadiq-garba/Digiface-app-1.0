@extends('layouts.layout')

@section('content')



<div class="container" style="padding-top:20px;">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Page name</th>
                <th>page link</th>
                <th>page image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
            <td style="text-transform:capitalize;">{{$user->website_name}}</td>
            <td><a style="text-transform:capitalize;" href="{{url('pages')}}/{{$user->website_name}}">{{$user->logo }}</a></td>
            <td><img src="{{url('storage/banner_img')}}/{{$user->banner_img}}" width="60" height="60"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else       


    {{$message}}


    @endif
</div>













@endsection