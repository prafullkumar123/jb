@extends('layout')

@section('content')

<div class="container col-lg-8 justify-content-center ">
    <h2>Enter Technology Details</h2>
    <br />
    <form method="Post" action="/edit">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id" value="{{$data->id}}">
        </div>
        <div class="form-group">
            <label for="title">Subject Title</label>
            <input type="text" name="title" value="{{$data->title}}" class="form-control text-success" id="title" placeholder=" Data Types">
        </div>
        <div class="form-group">
            <label for="techType">Tech Type</label>
            <select class="form-control text-success" id="techType" name="techType">
                @foreach($techdata as $dt)
                <option value="{{$dt->cid}}" {{$data->courseid == $dt->cid  ? 'selected' : ''}}>{{$dt->cname}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" value="{{$data->author}}" name="author" class="form-control text-success" id="author" placeholder="name@example.com">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <input type="text" value="{{$data->cdesc}}" name="desc" class="form-control text-success" id="desc" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="contant">Exaplanation</label>
            <textarea name="contant" class="form-control text-success" id="contant" rows="5">{{$data->contant}}</textarea>
        </div>
        <div class="form-group">
            <label for="code">Code</label>
            <textarea name="code" class="form-control text-success" id="code" rows="5">{{$data->code}}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0 fa fa-save">Submit</button>
    </form>
</div>
@stop