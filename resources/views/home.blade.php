@extends('layouts.app')

@section('content')
 <section>
    <div class="banner">
      <div class="container">
        <div class="row banner">
          <div class="col-12 col-sm-4 banner-text ">
            <div class="content">
              <h1 class="heading1">Making betting with your friends effortless with Bookie Buddie</h1>
              <p>Get rid of the hassle of organizing bets with your buddies using Bookie Buddie. Say goodbye to
                spreadsheets, group chats, running tabs, and phone notes for good. With Bookie Buddie, you can easily
                create private groups, connect with friends, or even make public bets. Take control of your betting
                experience with Bookie Buddie.</p>
              <button type="button" class="btn gradint">Start Now</button>
            </div>
          </div>

          <div class="col-12 col-sm-8 banner-img">
            <img src="{{asset('/frontend/')}}/image/banner.png" />
          </div>

        </div>
      </div>
    </div>

    <div class="side-heading">BETTING</div>

    <div class="about">
      <div class="container">
        <div class="row banner">

          <div class="col-12 col-sm-6 about-img">
            <img src="{{asset('/frontend/')}}/image/football.png" />
          </div>
          <div class="col-12 col-sm-6 about-text ">
            <div class="content">
              <h2 class="heading2">The more you bet, the more you save with Bookie Buddie</h2>
              <p class="about-p">Experience substantial savings by placing juice-free bets on Bookie Buddie and witness your earnings
                multiply. Take your betting to the next level by upgrading to a GOLD account, gaining access to higher
                betting limits, comprehensive analytical tools, and a host of additional benefits. Engage in riveting
                competitions with other Bookie Buddie users and demonstrate your expertise. With Bookie Buddie, you can
                enjoy the thrill of betting and competing on a budget while optimizing your potential for success.</p>
              <button type="button" class="btn gradint">Start Betting</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="team-box">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-4 item-box img-box1">
            <div class="img-box-row">
              <div class="row">
                <div class="col-5 col-sm-4">
                  <img src="{{asset('/frontend/')}}/image/box1.png" />
                </div>
                <div class="col-7 col-sm-8 box1">
                  <h5>Ricky Hashmi</h5>
                  <p>Los Vegas </p>
                  <ul>
                    <li>$4.7</li>
                    <li><span style="color: #FF9900;">+8.1</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 item-box img-box2">
            <div class="img-box-row">
              <div class="row">
                <div class="col-5 col-sm-4">
                  <img src="{{asset('/frontend/')}}/image/box2.png" />
                </div>
                <div class="col-7 col-sm-8 box1">
                  <h5>Ricky Hashmi</h5>
                  <p>Los Vegas </p>
                  <ul>
                    <li>$4.7</li>
                    <li><span style="color: #FF9900;">+8.1</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-4 item-box img-box3">
            <div class="img-box-row">
              <div class="row">
                <div class="col-5 col-sm-4">
                  <img src="{{asset('/frontend/')}}/image/box3.png" />
                </div>
                <div class="col-7 col-sm-8 box1">
                  <h5>Ricky Hashmi</h5>
                  <p>Los Vegas </p>
                  <ul>
                    <li>$4.7</li>
                    <li><span style="color: #FF9900;">+8.1</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-white text-center">
      <h2 class="heading2">Bookie Buddie is revolutionizing the game</h2>
      <p class="about-p">In contrast to traditional fixed-odds or exchange-based betting, social betting offers the advantage of knowing
        your opponent and being aware of the bets placed by others. Explore the dashboard to view available bets or
        create your own, and join the revolution of sports betting.</p>


      <!-- ////// Tabs Start /////// -->

      <div class="tab">
        <button class="tablinks active" onclick="openCity(event, 'All Sports')"><img
            src="{{asset('/frontend/')}}/image/spiner-icon.png" /></br>Sports</button>
        <button class="tablinks" onclick="openCity(event, 'Football')"><img
            src="{{asset('/frontend/')}}/image/football-icon.png" /></br>Football</button>
        <button class="tablinks" onclick="openCity(event, 'Baseball')"><img
            src="{{asset('/frontend/')}}/image/baseball-icon.png" /></br>Baseball</button>
        <button class="tablinks" onclick="openCity(event, 'Cricket')"><img
            src="{{asset('/frontend/')}}/image/cricket-icon.png" /></br>Cricket</button>
        <button class="tablinks" onclick="openCity(event, 'Golf')"><img src="{{asset('/frontend/')}}/image/golf-icon.png" /></br>Golf</button>
        <button class="tablinks" onclick="openCity(event, 'Tennis')"><img
            src="{{asset('/frontend/')}}/image/tennis-icon.png" /></br>Tennis</button>
      </div>
    </div>


    <div class="container">
      <div class="tab-section">
        <div id="All Sports" class="tabcontent" style="display: block;">
          <div class="container text-white sports-tabs ">
            <h2 class="heading2">United States League</h2>
            <h5 class="heading5">View More</h5>
            <hr style="height: 1px; color:rgb(255, 255, 255)">
          </div>
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 col-sm-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 col-sm-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 col-sm-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>

              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>


          <!-- 2 -->
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>

              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
          <!-- 3 -->
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>

              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
          <!-- 4 -->
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>

              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
        </div>


        <!-- /////// Football ////////// -->

        <div id="Football" class="tabcontent" style="display: none;">
          <div class="container text-white sports-tabs ">
            <h2 class="heading2">Football</h2>
            <h5 class="heading5">View More</h5>
            <hr style="height: 1px; color:rgb(255, 255, 255)">
          </div>

          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>
              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
        </div>

        <!-- //////// Baseball /////////// -->

        <div id="Baseball" class="tabcontent" style="display: none;">
          <div class="container text-white sports-tabs ">
            <h2 class="heading2">Baseball</h2>
            <h5 class="heading5">View More</h5>
            <hr style="height: 1px; color:rgb(255, 255, 255)">
          </div>
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>
              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
        </div>

        <!-- /////// Cricket ///////// -->

        <div id="Cricket" class="tabcontent" style="display: none;">
          <div class="container text-white sports-tabs ">
            <h2 class="heading2">Cricket</h2>
            <h5 class="heading5">View More</h5>
            <hr style="height: 1px; color:rgb(255, 255, 255)">
          </div>
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>
              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
        </div>

        <!-- /////// Golf ///////// -->

        <div id="Golf" class="tabcontent" style="display: none;">
          <div class="container text-white sports-tabs ">
            <h2 class="heading2">Golf</h2>
            <h5 class="heading5">View More</h5>
            <hr style="height: 1px; color:rgb(255, 255, 255)">
          </div>
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>
              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
        </div>

        <!-- /////// Tennis ///////// -->

        <div id="Tennis" class="tabcontent" style="display: none;">
          <div class="container text-white sports-tabs ">
            <h2 class="heading2">Tennis</h2>
            <h5 class="heading5">View More</h5>
            <hr style="height: 1px; color:rgb(255, 255, 255)">
          </div>
          <div class="container">
            <div class="row sports-bet">
              <div class="col-1 date">

                <p>30 Feb 2023<br>05:00 Am</p>

              </div>
              <div class="col-1 team">
                <img src="{{asset('/frontend/')}}/image/fcb-icon.png" /></br></br>
                <img src="{{asset('/frontend/')}}/image/madrid-icon.png" />
              </div>
              <div class="col-1 points">
                <h5 style="color: white;">5</h5></br></br>
                <h5 style="color: white;">3</h5>
              </div>
              <div class="col-1 cardz"> <img src="{{asset('/frontend/')}}/image/cards.png" /> </div>
              <div class="col-1 Count">
                <h4>02</h4>
              </div>
              <div class="col-1 num">2.30</div>
              <div class="col-1 num">1.25</div>
              <div class="col-1 num">+72</div>
              <div class="col-1 num">+25</div>
              <div class="col-2">
                <button type="button" class="Betting-btn">Betting Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- /////// Tabs End ////////// -->

    <div class="side-heading">BETTING</div>
    <div class="side2-heading">NOW</div>


    <div class="container ">
      <div class="row Result-icon">

        <div class="col-6 col-sm-3 icon-effact">
          <img src="{{asset('/frontend/')}}/image/TOTAL PROFIT.png" /></br></br>
          <h5>357854</br>TOTAL PROFIT</h5>
        </div>
        <div class="col-6 col-sm-3 icon-effact">
          <img src="{{asset('/frontend/')}}/image/TOTAL TIPSTER.png" /></br></br>
          <h5>586 </br>TOTAL TIPSTER</h5>
        </div>
        <div class="col-6 col-sm-3 icon-effact">
          <img src="{{asset('/frontend/')}}/image/AVERAGE ROI.png" /></br></br>
          <h5>122.00</br>AVERAGE ROI</h5>
        </div>
        <div class="col-6 col-sm-3 icon-effact">
          <img src="{{asset('/frontend/')}}/image/AVERAGE HIT.png" /></br></br>
          <h5>47.00</br>AVERAGE HIT</h5>
        </div>
      </div>
    </div>

    <div class="container matches-update text-white text-center">
      <h6 class="heading6">Get Playing Update</h6>
      <h2 class="heading2">UPCOMING MATCHES</h2>
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="row Playing-update">
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/fcb-logo.png" />
              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/vs.png" />

              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/madrid-logo.png" />

              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row Playing-update">
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/qatar.png" />
              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/vs.png" />

              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/usa.png" />

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="row Playing-update">
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/eng.png" />
              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/vs.png" />

              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/german.png" />

              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row Playing-update">
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/washington.png" />
              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/vs.png" />

              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/eagle.png" />

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-6">
            <div class="row Playing-update">
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/broncos.png" />
              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/vs.png" />

              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/nfl.png" />

              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="row Playing-update">
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/almeria.png" />
              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/vs.png" />

              </div>
              <div class="col-4">
                <img src="{{asset('/frontend/')}}/image/chelsea.png" />

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container text-white text-center">
      <h6 class="heading6">Testimonials</h6>
      <h2 class="heading2">OUR CUSTOMERS RESPONSE</h2>
      <div class="container testimonials">
        <div class="row">
          <div class="col">
            <img src="{{asset('/frontend/')}}/image/testim.png" /></br></br>
            <p>
            </p>
            <h5>Donald Thomas</h5>
            <img src="{{asset('/frontend/')}}/image/star.png" />

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

    <div class="side3-heading">NOW</div>

  </section>



@endsection
