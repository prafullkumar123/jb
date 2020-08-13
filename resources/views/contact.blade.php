@extends('layout')

@section('content')
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Success!</strong> {{Session::get('status')}}
</div>
@endif
@if(count($errors)>0)
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<!-- Section: Contact v.3 -->
<section class="container contact-section my-5" style="box-shadow:5px 5px 10px;">
    <!-- Form with header -->
    <div class="card">
        <!-- Grid row -->
        <div class="row">
            <!-- Grid column -->
            <div class="col-lg-8">
                <div class="card-body form">
                    <!-- Header -->
                    <h3 class="mt-4"><i class="fa fa-envelope nav-link text-success"></i>Write to us:</h3>
                    <!-- Grid row -->
                    <form method="post" action="mailGen">
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    @csrf
                                    <input type="text" name="name" id="form-contact-name" class="form-control">
                                    <label for="form-contact-name" class="">Your name</label>
                                </div>
                            </div>
                            <!-- Grid column -->
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="email" id="form-contact-email" class="form-control">
                                    <label for="form-contact-email" class="">Your email</label>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="mobile" id="form-contact-phone" class="form-control">
                                    <label for="form-contact-phone" class="">Your phone</label>
                                </div>
                            </div>
                            <!-- Grid column -->


                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <textarea id="form-contact-message" name="msg" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="form-contact-message">Your message</label>
                                    <a class="btn-floating btn-lg blue">
                                        <hr />
                                        <button class="btn btn-outline-success my-2 my-sm-0 fa fa-send " type="submit">Send</button>
                                    </a>
                                </div>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                    </form>

                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-4">

                <div class="card-body contact text-center h-100 white-text">

                    <h3 class="my-4 pb-2">Contact information</h3>
                    <ul class="text-lg-left list-unstyled ml-4">
                        <li>
                            <p><i class="fa fa-map-marker text-success" aria-hidden="true" pr-2"> &nbsp;</i>Raipur, C.G, INDIA</p>
                        </li>
                        <li>
                            <p><i class="fa fa-phone text-success" aria-hidden="true" pr-2"> &nbsp;</i>+ 91 1 234 567 89</p>
                        </li>
                        <li>
                            <p><i class="fa fa-envelope text-success" aria-hidden="true" pr-2"> &nbsp;</i>jbrothers@gmail.com</p>
                        </li>
                    </ul>
                    <hr class="hr-light my-4">
                    <ul class="list-inline text-center list-unstyled">
                        <li class="list-inline-item">
                            <a class="p-2 fa-lg tw-ic">
                                <p><i class="fa fa-facebook text-success" aria-hidden="true" pr-2"> &nbsp;</i></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="p-2 fa-lg li-ic">
                                <i class="fa fa-linkedin text-success"> </i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="p-2 fa-lg ins-ic">
                                <i class="fa fa-instagram text-success"> </i>
                            </a>
                        </li>
                    </ul>

                </div>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->



@stop