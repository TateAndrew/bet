@extends('customer.layouts.master')
@section('title',' DASHBOARD')
@section('main-content')

<style>
  .rowspan-center
  {
    text-align: center;
    vertical-align: middle;
  }
</style>
<section>
    <div class="container">
      <div class="row">
        @include('customer.layouts.sidebar')
        <div class="col-12 col-sm-9">
        <div class="card">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-8">
                <!-- <h2 class="text-center p-3">Card with Tabs</h2> -->
              </div>
              @include('customer.layouts.game_nav')
              
            </div>
          </div>
          <h4>UPCOMING</h4>
        @if (!empty($sports))
          <div class="tab-content" id="nav-tabContent tabContentContainer">
              <div class="tab-pane fade active show" id="mlb" role="tabpanel" aria-labelledby="nav-home-tab">
                  <!-- ... your other content ... -->
                  <div class="">
                      <div class="container">
                          <div class="row value-row" >
                              <div class="col-md-12">
                                 <table class="table  text-dark ">
                                   @foreach($sports as $k => $val)  
                                   <tbody>
                                    <tr class="bg-light">
                                        <td rowspan="2" width="15%" class="bg-primary text-light rowspan-center">
                                          <?php
                                             $datetime = new DateTime($val->MatchTime);
                                             $date = $datetime->format("Y-m-d"); // Date in "YYYY-MM-DD" format
                                             $time = $datetime->format("h:i A"); // Time in "HH:MM:SS" format
                                            ?>
                                            {{$date}} <br>
                                            {{$time}}
                                        </td>
                                        <td><?= $val->AwayTeam ?><td>
                                        <td width="10%" class="p-1"><a class="btn btn-sm btn-default border w-100" href="#">{{$val->Odds[0]->PointSpreadAway ?? 0}}</a><td>
                                        <td width="10%" class="p-1"><a class="btn btn-sm btn-default border w-100" href="#">{{ $val->Odds[0]->MoneyLineAway ?? 0 }}</a><td>
                                        <td width="10%" class="p-1"><a class="btn btn-sm btn-default border w-100" href="#">{{ $val->Odds[0]->TotalNumber ?? 0 }}</a><td>
                                        <td rowspan="2" class="bg-primary text-light rowspan-center"><a href="{{route('sport.view',['id'=> $val->match_id ])}}">Details >></a></td>
                                      </tr>
                                      <tr class="bg-light">
                                            <td><?= $val->HomeTeam ?><td>
                                            <td width="10%" class="p-1"><a class="btn btn-sm btn-default border w-100" href="#">{{ $val->Odds[0]->PointSpreadHome ?? 0}}</a><td>
                                            <td width="10%" class="p-1"><a class="btn btn-sm btn-default border w-100" href="#">{{ $val->Odds[0]->MoneyLineHome ?? 0 }}</a><td>
                                            <td width="10%" class="p-1"><a class="btn btn-sm btn-default border w-100" href="#">{{ $val->Odds[0]->TotalNumber ?? 0 }}</a><td>
                                      </tr>
                                    
                                   </tbody>
                                   @endforeach;

                                 </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          
          @else
			  <div class="text-danger">There are no bets for PGA at this time</div>
			  @endif



          </div>
        </div>
      </div>
    </div>


    <!-- Modal structure -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background: #07f;">
        <h5 class="modal-title " id="exampleModalLabel">TAKE THE BET</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- Modal content here -->
        <div class="row text-center">
          <div class="col-md-6">first</div>
          <div class="col-md-6">Second</div>
        </div>
      </div>
    </div>
  </div>
</div>


  </section>

<script>

$(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.take-bet-btn').click(function() {
            var rowId = $(this).data('row-id');
            var title = $(this).data('row-title'); // Assuming you have a data attribute for title

            $.ajax({
                type: 'PUT',
                url: '{{ route("sport.view", ["id" => "__ROW_ID__"]) }}'.replace('__ROW_ID__', rowId),
                data: {
                    id: rowId,
                    title: title
                },
                success: function(data) {
                    // Update modal content with fetched data
                    $('.modal-body .col-md-6:first-child').html(data.property1);
                    $('.modal-body .col-md-6:last-child').html(data.property2);
                    // ... Continue updating other modal content as needed
                },
                error: function() {
                    console.log('Error fetching data from the server');
                }
            });
        });
    });


  // Timer interval in milliseconds (5 seconds = 5000 ms)
  const refreshInterval = 120000;

  function fetchAndUpdateData() {
	  location.reload();
  }

  setInterval(fetchAndUpdateData, refreshInterval);
</script>
@endsection
