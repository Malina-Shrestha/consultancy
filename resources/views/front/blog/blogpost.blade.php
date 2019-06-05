@extends('layouts.front')
@section('content')
<div class="page-title-section" style="background-image: url({{ asset('public/img/bg/pagetitle.jpg') }});">
    <div class="container">
        <h1>Blog Post</h1>
        <ul>
        <li><a href="{{ asset('/') }}">Home</a></li>
        <li><a href="{{ route('front.blog')}}">Blog</a></li>
        </ul>
    </div>
</div>
<div class="section-block">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-8 col-12">
                <div class="blog-list-left"> <img src="{{ asset('public/img/blog/blog-post.jpg') }}" alt="img">
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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries.</p>
                        <blockquote class="blockquote">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries.</p>
                            <h4>- Tomas Edison</h4>
                        </blockquote>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. but also the leap into electronic typesetting,
                            remaining essentially unchanged.It was popularised in the 1960s with the release of
                            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                        <div class="row mt-30">
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="blog-list-img">
                                    <div class="video-video-box full-width"> <img src="{{ asset('public/img/blog/blog-6.jpg') }}"
                                            class="rounded-border" alt="img">
                                        <div class="video-video-box-overlay">
                                            <div class="video-video-box-button"> <button
                                                    class="video-video-play-icon" data-toggle="modal"
                                                    data-target=".video-modal"> <i class="fa fa-play"></i> </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade video-modal" id="videomodal1" tabindex="-1"
                                        role="dialog">
                                        <div class="modal-dialog modal-lg" role="document"> <iframe height="415"
                                                src="https://www.youtube.com/embed/EWzsJG07vHY"
                                                class="full-width round-frame image-shadow"
                                                allowfullscreen=""></iframe> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <div class="blog-list-bottom-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the
                                        1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also
                                        the leap into electronic typesetting, remaining essentially unchanged. but
                                        also the leap into electronic typesetting, remaining essentially
                                        unchanged.It was popularised in the 1960s with Letraset.</p>
                                </div>
                            </div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. but also the leap into electronic typesetting,
                            remaining essentially unchanged.It was popularised in the 1960s with Letraset.</p>
                        
                    </div>
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
                </div>.
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