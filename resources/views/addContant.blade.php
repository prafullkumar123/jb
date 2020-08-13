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
    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Subject Title</label>
            <input type="text" name="title" class="form-control text-success" id="title" placeholder=" Data Types">
        </div>
        <div class="form-group">
            <label for="techType">Tech Type</label>
            <select class="form-control text-success" id="techType" name="techType">
                <option value="1">Core Java</option>
                <option value="2">Java 8</option>
                <option value="3">Advance Java</option>
                <option value="4">Hibernate</option>
                <option value="5">Spring</option>
                <option value="6">Spring Boot</option>
                <option value="7">Spring Microservices</option>
                <option value="8">Angular</option>
                <option value="9">PHP</option>
                <option value="10">Laravel</option>

            </select>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control text-success" id="author" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <input type="text" name="desc" class="form-control text-success" id="desc" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="contant">Exaplanation</label>
            <textarea name="contant" class="form-control text-success" id="contant" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <textarea name="code" class="form-control text-success" id="code" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0 fa fa-save">Submit</button>
    </form>
</div>
@stop