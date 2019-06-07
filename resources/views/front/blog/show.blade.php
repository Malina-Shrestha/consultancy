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
                @foreach($blogs as $blog)
                    <div class="blog-list-left"> <img src="{{ asset('public/img')}}/{{ $blog->thumbnail }}" alt="img" alt="img">
                        <div class="data-box">
                                <h4>{!!date('d',strtotime($blog->created_at)) !!}</h4>
                                <strong>{!!date('M',strtotime($blog->created_at)) !!}</strong>
                        </div>
                        <div class="blog-title-box">
                            <h2>{{ $blog->title }}</h2> <span><i class="fa fa-calendar"></i>{{ date('Y M d',strtotime($blog->created_at)) }}</span>
                        </div>
                        <div class="blog-post-content">
                            <p>{!! substr($blog->description , 0, 100) . '...';!!}</p>
                        </div>
                        <div class="mt-15 mb-40"> <a href="{{ route('front.blog.detail',$blog->slug) }}" class="primary-button button-md">Read Article</a> </div>
                    </div>
                @endforeach
                </div>
                {{-- Recent Blogs --}}
                <div class="col-md-3 col-sm-4 col-12">
                    <div class="blog-list-right">
                        <div class="blog-list-left-heading">
                            <h4>Recent Blogs</h4>
                        </div>
                        @foreach($recentBlogs as $blog)
                            <div class="latest-posts">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-4 latest-posts-img"> <img src="{{ asset('public/img') }}/{{ $blog->thumbnail}}" alt="blog-img"> 
                                    </div>
                                    <div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> 
                                        <a href="#">{{ $blog->title }}</a> 
                                    <span>{!! date('m',strtotime($blog->created_at)) !!} {!! date('d',strtotime($blog->created_at)) !!}, {!! date('Y',strtotime($blog->created_at)) !!}</span> 
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
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