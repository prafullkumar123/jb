@extends('layout')

@section('content')

<div class="container col-lg-8 justify-content-center ">
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> {{Session::get('status')}}
    </div>
    @endif
    <h2>Enter Technology Details</h2>
    <br />
    <form method="POST" action="userReg">
        @csrf
        <div class="form-group">
            <label for="name">User Name</label>
            <input type="text" name="name" class="form-control text-success" id="name" placeholder=" Name">
        </div>
        <div class="form-group">
            <label for="email">User Email</label>
            <input type="email" name="email" class="form-control text-success" id="email" placeholder="example@gmail.com">
        </div>
        <div class="form-group">
            <label for="mobile">User Mobile</label>
            <input type="text" name="mobile" class="form-control text-success" id="mobile">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" name="pass" class="form-control text-success" id="pass">
        </div>
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0 fa fa-save">Registered</button>
    </form>
</div>
@stop