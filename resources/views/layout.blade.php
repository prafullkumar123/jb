<!DOCTYPE html>
<html lang="en">

<head>
    <title>JBrothers Software Solution Raipur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{url('assets/images/tit.png')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{url('assets/css/jbro.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet" type="text/css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <!-- head-->
        <div class="col-lg" style="background-color:white;">
            <a href="#" class="fa fa-facebook nav-link text-success">acebook</a>
            <a href="#" class="fa fa-instagram nav-link text-success">instagram</a>
            <a href="#" class="fa fa-linkedin  nav-link text-success"></a>
        </div>
        <!--/head-->
        <!-- Nav-->
        <nav class="navbar navbar-expand-lg sticky-top" style="background-color: white;">
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('assets/images/logo.png')}}" alt="Logo" width="60%"></a>
            <button class="navbar-toggler bg-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon my-toggler" style="color: white;"><i class="fa fa-bars p-1" aria-hidden="true"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active text-success">
                        <b><a class="nav-link text-success" href="{{url('/home')}}" >Home &nbsp<span class="sr-only">(current)</span></a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link text-success" href="{{url('/about')}}">About &nbsp</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link text-success" href="{{url('/contact')}}">Contact &nbsp</a></b>
                    </li>
                    <li class="nav-item">
                        <b><a class="nav-link text-success" href="{{url('/enquiry')}}">Enquiry &nbsp</a></b>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Blogs
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="box-shadow:2px 2px 5px;">
                            <a class="dropdown-item text-success" href="{{url('/techBlog/1')}}">Core Java</a>
                            <a class="dropdown-item text-success" href="{{url('/techBlog/2')}}">Java 8</a>
                            <a class="dropdown-item text-success" href="{{url('/techBlog/3')}}">Advance Java</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-success" href="{{url('/techBlog/4')}}">Spring</a>
                            <a class="dropdown-item text-success" href="{{url('/techBlog/5')}}">Hibernate</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-success" href="{{url('/techBlog/6')}}">Spring Boot</a>
                            <a class="dropdown-item text-success" href="{{url('/techBlog/7')}}">Micro-Services</a>
                            <a class="dropdown-item text-success" href="{{url('/techBlog/8')}}">Angular</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <br />
        <br />

        @yield('content')
        <br />
        <br />
    </div>
</body>
<footer class="page-footer font-small bg-dark">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-success"> Privacy policy - Terms & Conditions - All Rights
        Reserved. © 2020 Copyright:
        <a href="https://mdbootstrap.com/" class="text-success"> JBrothers</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->