@extends('layouts.front')

@section('content')
    <div class="page-title-section" style="background-image: url({{ asset('public/img/bg/pagetitle.jpg') }});">
        <div class="container">
            <h1>Blog List</h1>
            <ul>
                <li><a href="{{ asset('/') }}">Home</a></li>
                <li><a href="{{ route('front.blog') }}">Blog</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-12">
                    <div class="blog-list-left"> <img src="{{ asset('public/img/blog/list-s-2.jpg') }}" alt="img">
                        <div class="data-box">
                            <h4>23</h4> <strong>Mar</strong>
                        </div>
                        <div class="blog-title-box">
                            <h2>Save Time & Money In Your Business</h2> <span><i class="fa fa-calendar"></i>Feb 19,
                                2018</span>
                        </div>
                        <div class="blog-post-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages.</p>
                        </div>
                        <div class="mt-15 mb-40"> <a href="{{ route('front.blog.post') }}" class="primary-button button-md">Read Article</a> </div>
                    </div>
                    <div class="blog-list-left"> <img src="{{ asset('public/img/blog/list-s-1.jpg') }}" alt="img">
                        <div class="data-box">
                            <h4>23</h4> <strong>Mar</strong>
                        </div>
                        <div class="blog-title-box">
                            <h2>Save Time & Money In Your Business</h2> <span><i class="fa fa-calendar"></i>Feb 19,
                                2018</span>
                        </div>
                        <div class="blog-post-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages.</p>
                        </div>
                        <div class="mt-15 mb-40"> <a href="{{ route('front.blog.post') }}" class="primary-button button-md">Read Article</a> </div>
                    </div>
                    <div class="blog-list-left"> <img src="{{ asset('public/img/blog/list-s-3.jpg') }}" alt="img">
                        <div class="data-box">
                            <h4>23</h4> <strong>Mar</strong>
                        </div>
                        <div class="blog-title-box">
                            <h2>Save Time & Money In Your Business</h2> <span><i class="fa fa-calendar"></i>Feb 19,
                                2018</span>
                        </div>
                        <div class="blog-post-content">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages.</p>
                        </div>
                        <div class="mt-15 mb-40"> <a href="{{ route('front.blog.post') }}" class="primary-button button-md">Read Article</a> </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="blog-list-right">
                        <div class="blog-list-left-heading">
                            <h4>Recent News</h4>
                        </div>
                        <div class="latest-posts">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-4 latest-posts-img"> <img src="{{ asset('public/img/blog/b-t-1.jpg') }}"
                                        alt="blog-img"> </div>
                                <div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> <a href="#">Simply dummy
                                        text of the printing</a> <span>Mar 13, 2018</span> </div>
                            </div>
                        </div>
                        <div class="latest-posts">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-4 latest-posts-img"> <img src="{{ asset('public/img/blog/b-t-2.jpg') }}"
                                        alt="blog-img"> </div>
                                <div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> <a href="#">Simply dummy
                                        text of the printing</a> <span>Mar 19, 2018</span> </div>
                            </div>
                        </div>
                        <div class="latest-posts">
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-4 latest-posts-img"> <img src="{{ asset('public/img/blog/b-t-3.jpg') }}"
                                        alt="blog-img"> </div>
                                <div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> <a href="#">Simply dummy
                                        text of the printing</a> <span>Mar 27, 2018</span> </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-clients-grey border-top border-bottom">
        <div class="container">
            <div class="owl-carousel owl-theme clients" id="clients">
                <div class="item"> <img src="{{ asset('public/img/partners/partner1.png') }}" alt="partner-image"> </div>
                <div class="item"> <img src="{{ asset('public/img/partners/partner2.png') }}" alt="partner-image"> </div>
                <div class="item"> <img src="{{ asset('public/img/partners/partner3.png') }}" alt="partner-image"> </div>
                <div class="item"> <img src="{{ asset('public/img/partners/partner4.png') }}" alt="partner-image"> </div>
                <div class="item"> <img src="{{ asset('public/img/partners/partner5.png') }}" alt="partner-image"> </div>
                <div class="item"> <img src="{{ asset('public/img/partners/partner6.png') }}" alt="partner-image"> </div>
            </div>
        </div>
    </div>
@endsection