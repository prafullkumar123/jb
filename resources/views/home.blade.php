@extends('layout')

@section('content')
<div class="tr-home-slider slider-style-two">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#home-carousel" data-slide-to="0" class="active">
                <span class="catagory">Technology</span>
                <span class="indicators-title">We are working most trending Java Technology & Framworks.</span>
            </li>
            <li data-target="#home-carousel" data-slide-to="1">
                <span class="catagory">Technology</span>
                <span class="indicators-title">Spring Boot with Microservices is provide robust application
                    Development </span>
            </li>
            <li data-target="#home-carousel" data-slide-to="2">
                <span class="catagory">Business</span>
                <span class="indicators-title">Small scale startup business for software development.</span>
            </li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item carousel-item active">
                <div class="item-content">
                    <div class="item-image-content" data-animation="animated slideInLeft">
                    <div class="item-image" style=" background-image: url(assets/images/post/slider1.jpg)">
                        </div>
                    </div>
                    <div class="post-content" data-animation="animated fadeInDown">
                        <span class="catagory" data-animation="animated fadeInDown"><a href="#">Technology</a></span>
                        <h2 class="entry-title" data-animation="animated fadeInDwn">
                            <a href="details1.html">We are working most trending Java Technology & Framworks</a>
                        </h2>
                        <div class="entry-meta" data-animation="animated fadeInDwn">
                            <ul>
                                <li>By <a href="#">Prafull kumar</a></li>
                                <!-- <li>643 Share /<a href="#"> 9 Hour ago</a></li> -->
                            </ul>
                        </div>
                        <p data-animation="animated fadeInUp">
                            Microservices are a form of service-oriented architecture style (one of the most
                            important skills for Java developers) where in applications are built as a
                            collection of different smaller services rather than one whole app.
                            These smaller programs are grouped together to deliver all the functionalities of
                            the big, monolithic app.
                        </p>
                        <div class="read-more" data-animation="animated fadeInUp">
                            <div class="continue-reading pull-left">
                                <a href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="feed pull-right">
                                <ul>
                                    <li>Share</li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item carousel-item">
                <div class="item-content">
                    <div class="item-image-content" data-animation="animated slideInLeft">
                    <div class="item-image" style=" background-image: url(assets/images/post/slider2.jpg)">
                        </div>
                    </div>
                    <div class="post-content" data-animation="animated fadeInDown">
                        <span class="catagory" data-animation="animated fadeInDown"><a href="#">Technology</a></span>
                        <h2 class="entry-title" data-animation="animated fadeInDown">
                            <a href="details1.html">Spring Boot with Microservices is provide robust application
                                Development.</a>
                        </h2>
                        <div class="entry-meta" data-animation="animated fadeInDown">
                            <ul>
                                <li>By <a href="#">Dhanendra Sahu</a></li>
                                <!-- <li>218 Share /<a href="#"> 5 Hour ago</a></li> -->
                            </ul>
                        </div>
                        <p data-animation="animated fadeInUp">Spring Boot is a project that is built on the top
                            of the Spring Framework. It provides an easier and faster way to set up, configure,
                            and run both simple and web-based applications. It is a Spring module that provides
                            the RAD (Rapid Application Development) feature to the Spring Framework.</p>
                        <div class="read-more" data-animation="animated fadeInUp">
                            <div class="continue-reading pull-left">
                                <a href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="feed pull-right">
                                <ul>
                                    <li>Share</li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item carousel-item">
                <div class="item-content">
                    <div class="item-image-content" data-animation="animated slideInLeft">
                        <div class="item-image" style=" background-image: url(assets/images/post/slider3.jpg)">
                        </div>
                    </div>
                    <div class="post-content" data-animation="animated fadeInDown">
                        <span class="catagory" data-animation="animated fadeInDown"><a href="#">Business</a></span>
                        <h2 class="entry-title" data-animation="animated fadeInDown">
                            <a href="details1.html">Small scale startup business for software development</a>
                        </h2>
                        <div class="entry-meta" data-animation="animated fadeInDown">
                            <ul>
                                <li>By <a href="#">Dhanendra Sahu & Prafull Kumar</a></li>
                                <!-- <li>512 Share /<a href="#"> 3 Hour ago</a></li> -->
                            </ul>
                        </div>
                        <p data-animation="animated fadeInUp">Our main goal is to provide great software product
                            and application to
                            achive the perfection level in the market.</p>
                        <div class="read-more" data-animation="animated fadeInUp">
                            <div class="continue-reading pull-left">
                                <a href="#">Continue Reading <i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="feed pull-right">
                                <ul>
                                    <li>Share</li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- /slider-->


@stop