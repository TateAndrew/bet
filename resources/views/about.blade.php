@extends('layouts.app')
@section('content')
 <section class="main-section">
        <div class="banner1">
            <div class="container">
                <div class="row banner">
                    <div class="col-12 col-sm-4 banner-text ">
                        <div class="content">
                            <h1 class="heading1">About Us</h1>
                            <p>Experience substantial savings by placing juice-free bets on Bookie Buddie and witness
                                your earnings multiply. Take your betting to the next level by upgrading to a GOLD
                                account, gaining access to higher betting limits, comprehensive analytical tools, and a
                                host of additional benefits. Engage in riveting competitions with other Bookie Buddie
                                users and demonstrate your expertise. With Bookie Buddie, you can enjoy the thrill of
                                betting and competing on a budget while optimizing your potential for success.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-8 banner-img text-end">
                        <img src="{{asset('/frontend')}}/image/banner.png" class="banner-1-img">
                    </div>
                </div>
            </div>
        </div>
        <div class="side-heading">BETTING</div>

        <div class="about">
            <div class="container">
                <div class="row banner">

                    <div class="col-12 col-sm-6 about-img">
                        <img src="{{asset('/frontend')}}/image/football.png" />
                    </div>
                    <div class="col-12 col-sm-6 about-text ">
                        <div class="content">
                            <h2 class="heading2">BOOKIE BUDDIE IS REVOLUTIONZING SOCIAL SPORTS BETTING</h2>
                            <p>Bookie Buddie is revolutionizing social sports betting by offering a unique and
                                user-friendly web app. This groundbreaking platform, referred to as the "Craigslist" of
                                sports betting, allows bettors to compete against each other. Users can easily place
                                bets for friends, groups, or the wider community to accept. With seamless organization
                                and tracking of bets, as well as integration with popular payment apps for easy settling
                                up.</p>

                            <button type="button" class="btn gradint">Start Betting</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container text-white text-center test-div">
            <h6 class="heading6">Testimonials</h6>
            <h2 class="heading2">OUR CUSTOMERS RESPONSE</h2>
            <div class="container testimonials">
                <div class="row">
                    <div class="col">
                        <img src="{{asset('/frontend')}}/image/testim.png" /></br></br>
                        <p></p>
                        <h5>Donald Thomas</h5>
                        <img src="{{asset('/frontend')}}/image/star.png" />

                    </div>
                </div>
            </div>
        </div>
        <div class="container text-white text-center">
            <div class="row sub">
                <div class="col">
                    <h4 class="heading4">Sign Up Right Now</h4>
                    <h2 class="heading3">PLACE A BET AN GET A LOTS OF MOENY</h2>
                    <button type="button" class="btn-sub">Join For Free</button>
                </div>
            </div>
        </div>
    </section>

@endsection
