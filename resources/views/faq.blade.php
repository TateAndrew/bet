@extends('layouts.app')
@section('content')
<section class="main-section">
        <div class="banner1">
            <div class="container">
                <div class="row banner">
                    <div class="col-12 col-sm-4 banner-text ">
                        <div class="content">
                            <h1 class="heading1">FAQ's</h1>
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

        <div class="faq-div">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How do I place a bet?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who should I place my bets with?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our suggestion is to engage in friendly betting with both your friends and
                                        acquaintances. If you are new to betting, we advise diversifying your opponents
                                        by placing smaller bets and accepting wagers from a variety of individuals in
                                        your community. As you gain more confidence in your betting skills, consider
                                        adding your opponents as friends. Expand your network by inviting your friends
                                        to join and sign up for betting opportunities!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Does Bookie Buddie make any money off of my bets?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Nope, all we charge is the monthly subscription, that is if you have made the
                                        upgrade to Bookie Buddie GOLD.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headinga">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsea" aria-expanded="false" aria-controls="collapsea">
                                        When do I settle up my bets?
                                    </button>
                                </h2>
                                <div id="collapsea" class="accordion-collapse collapse" aria-labelledby="headinga"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        When should you settle your bets? It is expected that you settle your betting
                                        tab within 24 hours (eastern time) of the final outcome of the bet. You don’t
                                        owe Bookie Buddie anything, only your opponent 
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingb">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseb" aria-expanded="false" aria-controls="collapseb">
                                        What if someone is late to settle their bet?
                                    </button>
                                </h2>
                                <div id="collapseb" class="accordion-collapse collapse" aria-labelledby="headingb"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We recommend sending a request (ex. Venmo request/Paypal request/Cash app
                                        request) to the bettor who owes. If that does not work, please reach out to our
                                        customer service and our team will help out.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingc">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsec" aria-expanded="false" aria-controls="collapsec">
                                        What happens if someone does not settle up their bets?
                                    </button>
                                </h2>
                                <div id="collapsec" class="accordion-collapse collapse" aria-labelledby="headingc"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        In the event of a user's continued lack of response, we will proceed to suspend
                                        their account as well as any associated accounts. Suspended users will no longer
                                        have access to Bookie Buddie, and any pending, accepted, or ongoing bets will be
                                        promptly cancelled (affected users will be duly informed). Additionally, we will
                                        make an effort to facilitate communication between the parties involved to
                                        address the issue.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 faq-col-2">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                        Does Bookie Buddie Penalize users for paying slowly?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Should we receive various payment disputes during specific periods, we will
                                        temporarily halt the account responsible. On a more detailed note:<br>
                                        - 3 disputes within a span of 7 days will result in a suspension lasting 2
                                        weeks.<br>
                                        - An accumulation of 5 disputes within 10 days will lead to a suspension lasting
                                        a month.<br>
                                        - Further, should there be 10 disputes within a 30-day time frame, the account
                                        will undergo a suspension lasting 2 months.

                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        How does someone get released from suspension?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        The user who initiated the dispute must verify with us that the suspended user
                                        has resolved the issue. Upon confirmation, we will reinstate them. It is
                                        important to note that we maintain the authority to permanently ban individuals
                                        at our discretion, regardless of the circumstances.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        What happens when I block a user?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Please feel free to block any users you do not wish to engage in betting with.
                                        By blocking them, they will be unable to view or participate in your public
                                        bets.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headinge">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsee" aria-expanded="false" aria-controls="collapsee">
                                        I placed a bet I didn’t mean to?
                                    </button>
                                </h2>
                                <div id="collapsee" class="accordion-collapse collapse" aria-labelledby="headinge"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        All bets are final upon confirmation of the bet. Good luck! Get that W
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingf">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsef" aria-expanded="false" aria-controls="collapsef">
                                        How come no one took my bet?
                                    </button>
                                </h2>
                                <div id="collapsef" class="accordion-collapse collapse" aria-labelledby="headingf"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Before getting upset, it's worth verifying if you would have won. There is a
                                        chance that no one accepted your bet. Remember, the more people you invite, the
                                        higher the chances of finding takers for your bets. So go ahead and start
                                        recruiting now!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingg">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseg" aria-expanded="false" aria-controls="collapseg">
                                        What is the refund policy for Bookie Buddie GOLD?
                                    </button>
                                </h2>
                                <div id="collapseg" class="accordion-collapse collapse" aria-labelledby="headingg"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Bookie Buddie GOLD subscribers can cancel their subscription at any moment and
                                        for any purpose. Once cancellation is requested, the subscriptions and all
                                        associated advantages will end instantly. Refunds are only available if the
                                        request is made within 24 hours of starting the subscription. To initiate a
                                        refund, kindly send an email to support@bookiebuddie.com with the subject line
                                        "Refund Request" and include your full name, the amount you are seeking a refund
                                        for, and the reason for the request in the email's main content. Please be aware
                                        that the review process may take up to 7-10 business days.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection