@extends('layout')

@section('content')
<div class="container">
    <h2 class="h1-responsive font-weight-bold justify-content-center">{{$data -> title}} :: {{$data -> cdesc}}</h2>
    </br>
    <div class="row">
        <div class="col-lg-6">
            <P>{{$data -> contant}}</P>
        </div>
        <div class="col-lg-6 CodeMirror-cursors">
            <pre class="CodeMirror-line">
            {{$data -> code}}
            </pre>
            <div class="CodeMirror-code">
                <pre class=" CodeMirror-line "><span><span class="cm-m-xml cm-meta">
            </div>
        </div>

    </div>
</div>
@stop