@extends('layout')

@section('content')
<script>
function myFunction() {
  confirm("Are you want to Proceed Press ok !!");
}
</script>
<div class="container">
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> {{Session::get('status')}}
    </div>
    @endif
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Tech</th>
                <th>Author</th>
                <th>Description</th>
                <th>Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $list)
            <tr>
                <td>{{$list -> id}}</td>
                <td>{{$list -> title}}</td>
                <td>{{$list -> cname}}</td>
                <td>{{$list -> author}}</td>
                <td>{{$list -> cdesc}}</td>
                <td>{{$list -> date}}</td>
                <td><a href="/edit/{{$list ->id}}" onclick="myFunction()"><i class="fa fa-edit nav-link text-success"></i></a></td>
                <td><a href="/delete/{{$list ->id}}" onclick="myFunction()"><i class="fa fa-trash nav-link text-success"></i></a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

@stop