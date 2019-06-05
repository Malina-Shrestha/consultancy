@extends('layouts.front')
@section('content')
<div class="page-title-section" style="background-image: url({{ asset('public/img/bg/pagetitle.jpg') }});">
    <div class="container">
        <h1>FAQ</h1>
        <ul>
            <li><a href="{{ asset('/') }}">Home</a></li>
            <li><a href="{{ route('front.faq') }}">FAQ</a></li>
        </ul>
    </div>
</div>
<div class="section-block">
    <div class="container">
        <div class="section-heading">
            <h4>Have Any Questions?</h4>
            <div class="section-heading-line-left"></div>
        </div>
        <div class="row mt-40">
            <div class="col-md-6 col-sm-6 col-12">
                <div class="pr-30-md">
                    <div class="panel-group mt-10" id="accordion2" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-grey accordion">
                            <div class="panel-heading accordion-heading" role="tab" id="acc1">
                                <h4 class="panel-title accordion-title"> <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#ac_col1" aria-expanded="true" aria-controls="ac_col1"> Where can I get access to Capital IQ? </a> </h4>
                            </div>
                            <div id="ac_col1" class="panel-collapse collapse in show" role="tabpanel" aria-labelledby="acc1">
                                <div class="panel-body accordion-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-grey accordion">
                            <div class="panel-heading accordion-heading" role="tab" id="acc2">
                                <h4 class="panel-title accordion-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#ac_col2" aria-expanded="false" aria-controls="ac_col2"> Where can I find market
                                        research reports? </a> </h4>
                            </div>
                            <div id="ac_col2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="acc2">
                                <div class="panel-body accordion-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-grey accordion">
                            <div class="panel-heading accordion-heading" role="tab" id="acc3">
                                <h4 class="panel-title accordion-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#ac_col3" aria-expanded="false" aria-controls="ac_col3"> How do I get access to case
                                        studies? </a> </h4>
                            </div>
                            <div id="ac_col3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="acc3">
                                <div class="panel-body accordion-body"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-12">
                <div class="feedback-box">
                    <h5>Just submit your details and we’ll be in touch shortly.</h5>
                    <div class="feedback-form" autocomplete="off">
                        {{ Form::open(['method' => 'post', 'route' => ['front.contact.store']]) }}
                            <div class="row mt-10">
                                <div class="col-md-12"> <input type="hidden" value="faq-queries" name="subject" placeholder="Subject"> </div>
                                <div class="col-md-6 col-12"> <input type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-md-6 col-12"> <input type="email" name="email" placeholder="Your E-mail"> </div>
                                <div class="col-md-12"> <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div><button type="submit">Send Message</button>
                        {{ Form::close() }}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section-clients border-top border-bottom">
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
</div>
@endsection