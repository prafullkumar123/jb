@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        @foreach($data as $contant)
        <div class="card col-lg-3 mt-5 ml-5">
            <div class="card-body">
                <h5 class="card-title">{{$contant -> cdesc}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Author :: {{$contant -> author}}</h6>
                <p class="card-text">Date :: {{$contant -> date}}</p>
                <br>
                <br>
                <a href="/techBlogDesc/{{$contant ->id}}" class="card-link btn btn-outline-success my-2 my-sm-0">Card link</a>
               
            </div>
        </div>

        @endforeach
    </div>
    <br>
</div>

@stop