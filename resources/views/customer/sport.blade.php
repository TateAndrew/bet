@extends('customer.layouts.master')
@section('title',' DASHBOARD')
@section('main-content')
<section>
    <div class="container">
      <div class="row">
        @include('customer.layouts.sidebar')
        <div class="col-12 col-sm-9">
          <div class="card">
            <div class="container">
              <div class="row">
                <div class="col-8">
                  <!-- <h2 class="text-center p-3">Card with Tabs</h2> -->
                </div>
                @include('customer.layouts.nav')
               
              </div>
            </div>
            <h4>UPCOMING</h4>
			 @if($sport)
          @foreach($sport as $row)
            <div class="tab-content" id="nav-tabContent tabContentContainer">
              <div class="tab-pane fade active show" id="mlb" role="tabpanel" aria-labelledby="nav-home-tab">
                <!-- <span class="dot"></span> <h6>&#9679; LOW VALVUE</h6> -->
                <div class="">
                  <div class="container">
                    <div class="row value-row item">
                      {{-- <div class="col-1"><img src="/backend/assets/images/bird.png"></div> --}}
                      <div class="col-md-6">
                        <div class=""><h5>{{$row->HomeTeam}} @ {{$row->AwayTeam}}</h5></div>
                      </div>
                      <div class="col-md-6 text-end" >
                        <h5>{{$row->MatchTime}}</h5>
                      </div>
                    </div>
                    <div class="row mt-2 p-0">
                      <div class="col-md-12">
                          @include('customer.component.betting_table', ['match_id' => $row->ID])
                       </div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div><br>
            @endforeach 
			  @else
			  <div class="text-danger">There are no bets for PGA at this time</div>
			  @endif



          </div>
        </div>
      </div>
    </div>
  </section>

<script>
  // Timer interval in milliseconds (5 seconds = 5000 ms)
  const refreshInterval = 120000;

  function fetchAndUpdateData() {
	  
	  location.reload();
    // Write your Ajax code here to fetch new data from the server
    // and update the content inside the <div> with id "tabContentContainer"
    // Example:
    // fetch('your_server_url_here')
    //   .then(response => response.json())
    //   .then(data => {
    //     // Update the content inside tabContentContainer using data
    //   })
    //   .catch(error => console.error('Error fetching data:', error));
  }

  // Set up the timer to call the function every refreshInterval
  setInterval(fetchAndUpdateData, refreshInterval);
</script>
@endsection
