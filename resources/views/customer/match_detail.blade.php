@extends('customer.layouts.master')
@section('title',' DASHBOARD')
@section('main-content')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
  .divider {
      border-left: 2px solid #ccc !important;
      border-right: 2px solid #ccc !important;
      height: 200px;
      float:right;
   }
   .quantity-field {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 120px; 
      height: 40px;
      margin: 0 auto;    
    }

    .quantity-field .value-button{ 
      border: 1px solid #ddd;
      margin: 0px;
      width: 40px;
      height: 100%;   
      padding: 0;
      background: #eee; 
      outline: none;
      cursor: pointer;
    }

    .quantity-field .value-button:hover {
      background: rgb(230, 230, 230);
    }

    .quantity-field .value-button:active{
      background: rgb(210, 210, 210);
    }

    .quantity-field .decrease-button {
      margin-right: -4px;
      border-radius: 8px 0 0 8px;
    }

    .quantity-field .increase-button {
      margin-left: -4px;
      border-radius: 0 8px 8px 0;
    }
    
    .quantity-field .number{
      display: inline-block;
      text-align: center;
      border: none;
      border-top: 1px solid #ddd;
      border-bottom: 1px solid #ddd;
      margin: 0px;
      width: 40px;
      height: 100%;
      line-height: 40px;
      font-size: 11pt;
      box-sizing: border-box; 
      background: white;
      font-family: calibri;
    }

    .quantity-field .number::selection{
      background: none;
    }

    /*
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    */
</style>
<section>
    <div class="container">
      <div class="row">
        @include('customer.layouts.sidebar')
     
         <div class="col-md-9">
          <div class="row">
            <div class="col-12 col-sm-12 text-center">
              @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                  {{ $error }}
                 </div>
              @endforeach
              @if(session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
              <span class="badge bg-transparent border border-primary fs-5"><b>Game starts</b>
                <div id="result" class="result"></div>
               <?php
                  $datetime = new DateTime($match->MatchTime);
                  $date = $datetime->format("Y-m-d"); // Date in "YYYY-MM-DD" format
                  $time = $datetime->format("h:i A"); // Time in "HH:MM:SS" format
                ?>
                {{$date}} <br>
                {{$time}}
              </span>
            </div>
          </div>
          <div class="row  text-center p-5">
            <div class="col col-md-5">
                <div class="mb-5">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjW8VasAVkqWDgWEJ-7LPmJ60qZ40AKChZiRkvIG7u4Q&s" />
                </div>
                <h2>{{ $match->AwayTeam }}</h2>
            </div>
            <div class="col-md-2 divider d-flex justify-content-center align-items-center ">
              <h1>VS</h1>
            </div>
            <div class="col col-md-5 text-light">
              <div class="mb-5">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjW8VasAVkqWDgWEJ-7LPmJ60qZ40AKChZiRkvIG7u4Q&s" />
              </div>
              <h2>{{ $match->HomeTeam }}</h2>
          </div>
            
          </div>
          <div class="row">
         <div class="col-md-12 d-flex justify-content-center">
           <h3 class="badge bg-transparent border border-primary fs-5">  {{ $match->latestOdds->PointSpreadAway}}</h3>
           <span class="text-light"> ..................................................... </span>
           <h3 class="fs-3">SPREAD </h3>
           <span class="text-light"> ...................................................... </span>
           <h3 class="badge bg-transparent border border-primary fs-5">{{ $match->latestOdds->PointSpreadHome}}</h3>
         </div>
         <div class="col-md-12 d-flex justify-content-center">
          <h3 class="badge bg-transparent border border-primary fs-5">{{ $match->latestOdds->MoneyLineAway}}</h3>
          <span class="text-light"> ..................................................... </span>
          <h3 class="fs-3">MONEYLINE </h3>
          <span class="text-light"> ...................................................... </span>
          <h3 class="badge bg-transparent border border-primary fs-5">{{ $match->latestOdds->MoneyLineHome}} </h3>
        </div>
        <div class="col-md-12 d-flex justify-content-center">
          <h3 class="badge bg-transparent border border-primary fs-5"> {{ $match->latestOdds->OverLine}} </h3>
          <span class="text-light"> ..................................................... </span>
          <h3 class="fs-3">TOTAL POINTS
          </h3>
          <span class="text-light"> ...................................................... </span>
          <h3 class="badge bg-transparent border border-primary fs-5"> {{ $match->latestOdds->UnderLine}} </h3>
       
        </div>
        
        </div>
        <div class="row justify-content-center mt-5">

          <div class="dropdown">
            <button type="button" class="btn btn-lg btn-success w-100 dropdown-toggle " data-bs-toggle="dropdown">
              TAKE THE BET
            </button>
            <ul class="dropdown-menu  w-100">
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#spread" href="javascript:void(0);">Spread</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#moneyline" href="javascript:void(0);">Moneyline</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#points" href="javascript:void(0);">Total Points</a></li>
            </ul>
          </div>
            {{-- <button class="btn btn-lg btn-success w-50" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bettingmodal">Open a Bet</button> --}}
        </div>
       </div>
      </div>
    </div>
    <!-- Modal structure -->
    <div class="modal fade" id="spread" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="moneylineLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered  modal-md">
        <div class="modal-content">
          <div class="modal-header bg-primary ">
            <h5 class="modal-title " id="spreadmodalLabel">TAKE THE BET</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Modal content here -->
            <form method="POST" action="{{route("place_spread_bet")}}">
              @csrf
              <div class="row p-2">
                  <div  class="col-md-12 text-center">
                      <h4 class="text-dark fs-5">{{ $match->AwayTeam }} <b>@</b> {{ $match->HomeTeam }}</h4>
                      <span class="badge bg-transparent border border-primary text-dark fs-5 ">
                        <?php
                          $datetime = new DateTime($match->MatchTime);
                          $date = $datetime->format("Y-m-d"); // Date in "YYYY-MM-DD" format
                          $time = $datetime->format("h:i A"); // Time in "HH:MM:SS" format
                        ?>
                        {{$date}} &nbsp; {{$time}}
                      </span>
                  </div>
                  <input type="hidden" name="match_id" value="{{$match->match_id}}"/>
                  
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark">Team</h3>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="btn-check team" name="TeamROT" data-pts="{{$match->latestOdds->PointSpreadAway}}" id="moneyline1" value="{{ $match->AwayROT }}" autocomplete="off">
                      <label class="btn btn-outline-primary" for="moneyline1">{{ $match->AwayTeam }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="btn-check team" data-pts="{{$match->latestOdds->PointSpreadHome}}" name="TeamROT" id="moneyline2" value="{{ $match->HomeROT }}" autocomplete="off">
                      <label class="btn btn-outline-primary" for="moneyline2">{{ $match->HomeTeam }}</label>
                    </div>
                  </div> 
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark">Points</h3>
                    <div class="quantity-field" >
                      <button 
                        type="button"
                        class="value-button decrease-button" 
                        onclick="decreaseValue(this)" 
                        title="Azalt">-</button>
                        <input class="number w-100" id="spreadpts" name="pts" readonly value="0" />
                      <button 
                        type="button"
                        class="value-button increase-button" 
                        onclick="increaseValue(this)"
                        title="Arrtır"
                      >+
                      </button>
                    </div>
                  </div> 
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark">Wager</h3>
                    <div class="mb-3">
                      <label for="" class="form-label">Bet</label>
                      <input type="Number" name="bet_amount" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 text-center">
                      <button type="submit" class="btn btn-primary btn-md">Continue</button> 
                    </div>
                    
                  </div> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="points" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="moneylineLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered  modal-md">
        <div class="modal-content">
          <div class="modal-header bg-primary ">
            <h5 class="modal-title " id="spreadmodalLabel">TAKE THE BET</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Modal content here -->
            <form id="myForm">
              <meta name="csrf-token" content="{{ csrf_token() }}">

              @csrf
              <div class="row p-2">
                  <div  class="col-md-12 text-center">
                      <h4 class="text-dark fs-5">{{ $match->AwayTeam }} <b>@</b> {{ $match->HomeTeam }}</h4>
                      <span class="badge bg-transparent border border-primary text-dark fs-5 ">
                        <?php
                          $datetime = new DateTime($match->MatchTime);
                          $date = $datetime->format("Y-m-d"); // Date in "YYYY-MM-DD" format
                          $time = $datetime->format("h:i A"); // Time in "HH:MM:SS" format
                        ?>
                        {{$date}} &nbsp; {{$time}}
                      </span>
                  </div>
                  <input type="hidden" name="match_ids" value="{{$match->match_id}}"/>
                  
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark">Team</h3>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="btn-check totalpointteam" name="TeamROT" data-pts="{{$match->latestOdds->OverLine}}" id="totalteamradio1" value="{{ $match->AwayROT }}" autocomplete="off">
                      <label class="btn btn-outline-primary" for="totalteamradio1">{{ $match->AwayTeam }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="btn-check totalpointteam" data-pts="{{$match->latestOdds->UnderLine}}" name="TeamROT" id="totalteamradio2" value="{{ $match->HomeROT }}" autocomplete="off">
                      <label class="btn btn-outline-primary" for="totalteamradio2">{{ $match->HomeTeam }}</label>
                    </div>
                  </div> 
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark">Points</h3>
                    <div class="quantity-field" >
                      <button 
                        type="button"
                        class="value-button decrease-button" 
                        onclick="decreaseValue(this)" 
                        title="Azalt">-</button>
                        <input class="number w-100" id="totalpointteamfld" name="pts" readonly value="0" />
                      <button 
                        type="button"
                        class="value-button increase-button" 
                        onclick="increaseValue(this)"
                        title="Arrtır"
                      >+
                      </button>
                    </div>
                  </div> 
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark">Wager</h3>
                    <div class="mb-3">
                      <label for="" class="form-label">Bet</label>
                      <input type="Number" name="bet_amounts" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="mb-3 text-center">
                      <button type="button" class="btn btn-primary btn-md" id="ajaxButton">Continue</button> 
                    </div>
                    
                  </div> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="moneyline" data-bs-backdrop="static" data-bs-keyboard="false"  tabindex="-1" aria-labelledby="moneylineLabel" aria-hidden="true">xa
      <div class="modal-dialog modal-dialog-centered  modal-md">
        <div class="modal-content">
          <div class="modal-header bg-primary ">
            <h5 class="modal-title " id="moneylineLabel">TAKE THE BET</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Modal content here -->
            <form method="POST" action="{{route("place_moneyline_betting")}}">
              @csrf
              <div class="row p-2">
                  <div  class="col-md-12 text-center">
                      <h4 class="text-dark fs-5">{{ $match->AwayTeam }} <b>@</b> {{ $match->HomeTeam }}</h4>
                      <span class="badge bg-transparent border border-primary text-dark fs-5 ">
                        <?php
                          $datetime = new DateTime($match->MatchTime);
                          $date = $datetime->format("Y-m-d"); // Date in "YYYY-MM-DD" format
                          $time = $datetime->format("h:i A"); // Time in "HH:MM:SS" format
                        ?>
                        {{$date}} &nbsp; {{$time}}
                      </span>
                  </div>
                  <input type="hidden" name="match_id" value="{{$match->match_id}}"/>
                  
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark text-center">Team</h3>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="btn-check moneylineteam" name="TeamROT" data-pts="{{$match->latestOdds->MoneyLineAway}}" id="spreadteamradio1" value="{{ $match->AwayROT }}" autocomplete="off">
                      <label class="btn btn-outline-primary" for="spreadteamradio1">{{ $match->AwayTeam }}</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input type="radio" class="btn-check moneylineteam" data-pts="{{$match->latestOdds->MoneyLineHome}}" name="TeamROT" id="spreadteamradio2" value="{{ $match->HomeROT }}" autocomplete="off">
                      <label class="btn btn-outline-primary" for="spreadteamradio2">{{ $match->HomeTeam }}</label>
                    </div>
                  </div> 
                  <div  class="col-md-6 mt-3">
                    <h3 class="text-dark text-center">Bet</h3>
                    <div class="mb-3">
                      <input type="Number" name="bet_amount" id="ml_bet_amount" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                  </div>
                  <div  class="col-md-6 mt-3">
                    <h3 class="text-dark text-center">Win</h3>
                    <div class="mb-3">
                      <input type="Number" name="win_amount" id="ml_win_amount" readonly class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                  </div>
                   
                  <div  class="col-md-12 mt-3">
                    <h3 class="text-dark text-center">Points</h3>
                    <div class="quantity-field" >
                      <button 
                         type="button"
                         id="moneylinedec"
                         class="value-button decrease-button" 
                         title="Azalt">-</button>
                        <input class="number w-100" id="moneylinefld" name="Line" readonly value="100" />
                       <button 
                        type="button"
                        id="moneylineInc"
                        class="value-button increase-button" 
                        title="Arrtır"
                       >+
                      </button>
                    </div>
                  </div> 
                  <div  class="col-md-12 mt-3">
                    <div class="mb-3 text-center">
                      <button type="submit" class="btn btn-primary btn-md">Continue</button> 
                    </div>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </section>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  
  <script>
    $(document).ready(function() {
      var token = $('meta[name="csrf-token"]').attr('content');
      
      // Serialize the form data
      $('#ajaxButton').click(function() {
      var formData = {
           
            match_id: $('input[name="match_ids"]').val(),
            TeamROT: $('input[name="TeamROT"]:checked').val(),
            pts: $('#spreadpts').val(),
            bet_amount: $('input[name="bet_amounts"]').val(),
        };
        console.log(
          formData
            );
        // var formData = $('#m yForm').serialize();
        $.ajax({
          url: '{{ route('place_total_bet') }}',
          
          type: 'POST',
          data: {
            _token: token,
            formData,
          },
          success: function(response) {
            if(response.error){

              toastr.error(response.error, 'Error', { closeButton: false });
            }
            
            else{
              toastr.success(response.success, 'Success', { closeButton: true });

            }
            // $('.result').html(response.message);
          },
          error: function(xhr) {
            console.log(
              xhr
            );
            // $('.result').html('Error: ' + xhr.responseText);
          }
        });
      });
  
      $("#moneylinedec").on("click", function() {
        debugger;
        var money_line = $("#moneylinefld").val();
        if (money_line == 100) {
          $("#moneylinefld").val(money_line - 200);
        } else {
          $("#moneylinefld").val(money_line - 1);
        }
        $("#ml_bet_amount").trigger("input");
      });
      $("#moneylineInc").on("click", function() {
        debugger;
        var money_line = $("#moneylinefld").val();
        if (money_line == -100) {
          $("#moneylinefld").val((100));
        } else {
          money_line++
          $("#moneylinefld").val(money_line);
        }
        $("#ml_bet_amount").trigger("input");
      });
      $(".team").on("click", function() {
        var pts = $(this).attr("data-pts");
        $("#spreadpts").val(pts);
      });
      $(".moneylineteam").on("click", function() {
        var pts = $(this).attr("data-pts");
        $("#moneylinefld").val(pts);
        $("#ml_bet_amount").trigger("input");
      });
      $(".totalpointteam").on("click", function() {
        var pts = $(this).attr("data-pts");
        $("#totalpointteamfld").val(pts);
      });
       $("#ml_bet_amount").on("input", function() {
        var moneylinefld = $("#moneylinefld").val();
        if(moneylinefld > 0)
        {
            var winning_amount =  ($(this).val()/100)*Math.abs(moneylinefld);
            $("#ml_win_amount").val(winning_amount); 
        }
        else
        {
            var winning_amount = ($(this).val()/Math.abs(moneylinefld))*100;
            $("#ml_win_amount").val(winning_amount); 
        }
      });
    });
  
    // Timer interval in milliseconds (5 seconds = 5000 ms)
    
  
  
    function increaseValue(button) {
      const numberInput = button.parentElement.querySelector('.number');
      var value = parseFloat(numberInput.value, 10);
      if (isNaN(value)) value = 0;
      numberInput.value = value + 0.50;
    }
  
    function decreaseValue(button) {
      const numberInput = button.parentElement.querySelector('.number');
      var value = parseFloat(numberInput.value, 10);
      if (isNaN(value)) value = 0;
      numberInput.value = value - 0.50;
    }
  </script>
  
@endsection
