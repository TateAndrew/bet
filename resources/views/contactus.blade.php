@extends('layouts.app')
@section('content')
<section class="main-section">
        <div class="banner1">
            <div class="container">
                <div class="row banner">
                    <div class="col-12 col-sm-4 banner-text ">
                        <div class="content">
                            <h1 class="heading1">Contact Us</h1>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 banner-img text-end">
                        <img src="{{asset('/frontend')}}/image/banner.png" class="banner-1-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="side-heading">BETTING</div>
        <div class="main-contact-div">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="contact-div">
                            <img src="{{asset('/frontend')}}/image/phone-icon.png" class="phone-icon" alt="phone-icon">
                            <a href="tel:+1 123 456 789">
                                <h4 class="phone">+1 123 456 789</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-div">
                            <img src="{{asset('/frontend')}}/image/email-icon.png" class="phone-icon" alt="phone-icon">
                            <a href="mailto:support@bookiebuddie.com">
                                <h4 class="phone">support@bookiebuddie.com</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-div">
                            <img src="{{asset('/frontend')}}/image/address-icon.png" class="phone-icon" alt="phone-icon">
                            <h4 class="phone">TX,United States</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="side-heading">BETTING</div>

        <div class="main-contact-div-2">
            <div class="container">
                <h2 class="heading2">Send Your Queries Here</h2>
                <p>To contact Bookie Buddie directly, either send an email to <a
                        href="mailto:support@bookiebuddie.com">support@bookiebuddie.com</a> or complete the
                        form provided below, and we will respond to you at our earliest convenience.</p>
                <form action="#" method="post">
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <div class="form-col">
                                <input class="form-control" type="text" placeholder="Your Name..." />
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="form-col">
                                <input class="form-control" type="email" placeholder="Your Email..." />
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-col">
                                <input class="form-control" type="text" placeholder="Your Phone..." />
                            </div>
                        </div>
                        <div class="col-md-6 mt-3">
                            <div class="form-col">
                                <input class="form-control" type="text" placeholder="Your Subject..." />
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <textarea class="w-100" rows="8" placeholder="Your Message..."></textarea>
                        </div>
                        <div class="col-md-12">
                            <button class="submit-btn" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection