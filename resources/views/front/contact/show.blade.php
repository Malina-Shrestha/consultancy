@extends('layouts.front')
@section('content')
        <div class="page-title-section" style="background-image: url({{ asset('public/img/bg/pagetitle.jpg') }});">
        <div class="container">
            <h1>Contact</h1>
            <ul>
                <li><a href="index.html">Home</a></li>
            <li><a href="{{route('front.contact')}}">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="section-block">
        <div class="container">
            <div class="section-heading center-holder"> <span>Get in Touch</span>
                <h3>Let's Talk about Your Future</h3>
                <div class="section-heading-line"></div>
            </div>
            <div class="row mt-50">
                <div class="col-md-6 col-sm-6 col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.063887294814!2d85.33225991438408!3d27.684420233107446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19bfd892088f%3A0x62a1dadaf6fb66f9!2sBasobaas!5e0!3m2!1sen!2snp!4v1559039476261!5m2!1sen!2snp" width="100%" height="425" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                
                <div class="col-md-6 col-sm-6 col-12">
                <div class="contact-form">
                
                    {{ Form::open(['method' => 'post', 'route' => ['front.contact.store']]) }}
                        <div class="row">
                            <div class="col-md-12"> <input type="text" name="subject" placeholder="Subject" required> </div>
                            <div class="col-md-6 col-sm-6 col-12"> <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-md-6 col-sm-6 col-12"> <input type="email" name="email"
                                    placeholder="E-mail" required> </div>
                            <div class="col-md-12"> <textarea name="message" placeholder="Message"  required></textarea> </div>
                            <div class="col-md-12">
                                <div class="center-holder"> <button type="submit">Send Message</button> </div>
                            </div>
                        </div>
                    {{ Form::close() }}
                
                </div>
                </div>
            </div>
            <div class="row mt-50">
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="contact-data-box">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="contact-data-box-icon m-auto m-sm-2"> <i class="fa fa-phone"></i> </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-12">
                                <div class="contact-data-box-text text-center text-sm-left mb-3 mb-sm-0">
                                    <h4>Phone</h4>
                                    <h6>(+977)123-456-789z</h6>
                                    <h6>(+977)987-654-321</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="contact-data-box">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="contact-data-box-icon m-auto m-sm-2"> <i class="fa fa-envelope-open"></i> </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-12">
                                <div class="contact-data-box-text text-center text-sm-left mb-3 mb-sm-0">
                                    <h4>Message</h4>
                                    <h6>educons@gmail.com</h6>
                                    <h6>example@gmail.com</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-12">
                    <div class="contact-data-box ">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-12">
                                <div class="contact-data-box-icon m-auto m-sm-2"> <i class="fa fa-globe"></i> </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-12">
                                <div class="contact-data-box-text text-center text-sm-left">
                                    <h4>Our Location</h4>
                                    <h6>Kathmandu, Nepal</h6>
                                    <h6>Pokhara, Nepal</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection