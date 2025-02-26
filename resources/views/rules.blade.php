@extends('layouts.app')
@section('content')
<section class="main-section">
        <div class="banner1">
            <div class="container">
                <div class="row banner">
                    <div class="col-12 col-sm-4 banner-text ">
                        <div class="content">
                            <h1 class="heading1">Rules</h1>
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
        <div class="privacy-inner-div">
            <div class="container">
                <h3 class="pr-head">Explanation of Baseball Betting:</h3>
                <p class="pr-text">- Bets must be placed on games that start on the scheduled day and time at the local
                    stadium.<br>
                    - If a game is suspended after it has started but is resumed within 36 hours of the original start
                    time, bets will have action. Otherwise, all bets will be void.<br>
                    - If a game is terminated before becoming official and is not scheduled to resume, all bets will be
                    void.<br>
                    - Moneyline bets require the game to go at least 5 full innings (or 4.5 innings if the home team is
                    ahead) for action. If the game is called/suspended after this point and not rescheduled, the winner
                    is determined by the score after the last full inning.<br>
                    - Total Runs and Run Line bets require the game to go at least 9 full innings (or 8.5 innings if the
                    home team is ahead) for action.<br>
                    - For 7 inning games, Run Line/Total Runs bets require the game to go at least 7 full innings (or
                    6.5 innings if the home team is ahead) for action.<br>
                    - In playoff games, all wagers have action until the completion of the game.<br>
                    - Settlement will be based on the result at the time of the "Mercy Rule" call.<br>
                    - If the game venue is changed but the home team remains the same, bets will stand. If the home and
                    away team listings are reversed, bets on the original listing will be void.<br>
                    - All bets include extra innings unless otherwise stated.
                </p>

                <h3 class="pr-head">Explantion of Basketball Betting:</h3>
                <p class="pr-text">- Bets must be placed on games that start on the scheduled day and time at the local
                    stadium.<br>
                    - There must be 5 minutes or less of scheduled game time remaining for bets to have action.<br>
                    - If a game is halted before the minimum time has been played and not completed within 48 hours,
                    bets will be void.<br>
                    - If a game is halted after the minimum time has been played and not completed within 48 hours, the
                    score when the game was halted determines the betting results.<br>
                    - In playoff games, all wagers have action until completion as determined by the league's governing
                    body.<br>
                    - If a game is halted and replayed in full, all bets will be void.<br>
                    - If the game venue is changed and the home team remains the same, bets will stand. If the home and
                    away team listings are reversed, bets on the original listing will be void.<br>
                    - All bets include overtime unless otherwise stated.

                </p>

                <h3 class="pr-head">Explantion of Football Betting:</h3>
                <p class="pr-text">Games must start in the same scheduling week of the league for bets to have
                    action.<br>
                    - There must be 5 minutes or less of scheduled game time left for bets to have action.<br>
                    - If a game is halted before the minimum time has been played and not completed within 48 hours,
                    bets will be void.<br>
                    - If a game is halted after the minimum time has been played and not completed within 48 hours, the
                    score when the game was halted determines the betting results.<br>
                    - In playoff games, all wagers have action until completion as determined by the league's governing
                    body.<br>
                    - If a game is halted and replayed in full, all bets will be void.<br>
                    - If the game venue is changed and the home team remains the same, bets will stand. If the home and
                    away team listings are reversed, bets on the original listing will be void.<br>
                    - All bets include overtime unless otherwise stated.<br>
                    - Forfeited games do not count for settlement purposes.

                </p>

                <h3 class="pr-head">Explanation of Golf Betting:</h3>
                <p class="pr-text">- If the start of a round is delayed or play during a round is suspended, pending
                    wagers will remain valid for 48 hours. More than 48 hours will result in voided bets.<br>
                    - If a golfer withdraws before the start of a tournament, bets on that participant will be void.<br>
                    - Bets stand once the player tees off the first hole.<br>
                    - To place bets on tournament matches in golf, select the "Tournament" filter in the golf
                    league.<br>
                    - Bets are considered valid once the players have started playing from the first hole.<br>
                    - In case a player withdraws from the tournament, the player who completes the most holes is
                    declared the winner.<br>
                    - If both players complete the same number of holes, the player with the lowest score is declared
                    the winner.<br>
                    - If both players miss the cut, the player with the lowest score is declared the winner.<br>
                    - If one player misses the cut and the other makes the cut, the player who makes the cut is declared
                    the winner.<br>
                    - If bad weather causes a reduction in the scheduled number of rounds, bets will still be settled if
                    there is a deemed tournament winner and at least 36 holes have been played. The winner will be the
                    player leading after the last completed official round.<br>
                    - If a player is disqualified or withdraws after starting, the other player is declared the winner,
                    unless the disqualified player is in the 3rd or 4th rounds and the other player has already missed
                    the cut.<br>
                    <br><br>
                    Explanation of Individual Round Match Bets:<br>
                    - To place bets on individual round matchups in golf, select the respective round filter (1st, 2nd,
                    3rd, or 4th) in the golf league.<br>
                    - Bets are considered valid once the players have started playing from the first hole.<br>
                    - If a player withdraws, the player who completes the most holes is declared the winner.<br>
                    - If both players complete the same number of holes, the player with the lowest score is declared
                    the winner.<br>
                    - If the matchup ends in a tie, bets will be void.<br>
                    - Results of playoffs are taken into account for settlement purposes.<br>
                </p>

                <h3 class="pr-head">Explanation of Hockey Betting:</h3>
                <p class="pr-text">- The hockey game must start on the scheduled day (local stadium time) for bets to be
                    valid.<br>
                    - Bets will only have action if there are 5 minutes or less of scheduled game time left.<br>
                    - If a game is halted before the minimum time has been played and is not completed within 48 hours
                    of the scheduled start date, bets will be void, unless otherwise stated (such as in playoff
                    games).<br>
                    - If a game is halted after the minimum time has been played and is not completed within 48 hours of
                    the scheduled start date, the betting results will be determined by the score when the game was
                    halted, unless otherwise stated (such as in playoff games).<br>
                    - In halted playoff games or postseason tournament games, all wagers have action until the game is
                    completed as determined by the league's governing body.<br>
                    - If a game is halted at any time and replayed in full, all bets will be void.<br>
                    - If the venue of a game is changed and the home team remains the same, bets will stand.<br>
                    - If the venue of a game is changed and the home and away teams' listings are reversed, bets placed
                    on the original listing will be void.<br>
                    - In the event of a game being decided by a penalty shootout, one goal will be added to the winning
                    team's score and the game total for settlement purposes.<br>
                    - All markets, unless otherwise stated, include overtime and shootout.

                </p>

                <h3 class="pr-head">Explanation of MMA Betting:</h3>
                <p class="pr-text">Bets will be settled based on the official result announced at the end of the fight.
                    Any subsequent appeals or amendments will not affect the settlement, unless the amendment was made
                    due to human error during the result announcement.<bR><br>

                    - If a fight ends in a "No Contest," all bets will be void. If a fighter withdraws or the referee
                    stops the fight between rounds, the fight will be considered to have ended in the previous round.
                    <br>
                    - If an event is postponed, cancelled, a fighter is replaced, or the number of rounds in a fight
                    changes, all bets will be void.
                    <br>
                    - If the fight does not take place as scheduled and does not occur on the same date (local time),
                    all bets are void. However, two exceptions to this rule are if we advertise an incorrect start time
                    or if we set up a fight using an expected date before the exact date is confirmed. Once an official
                    announcement is made regarding the fight date, the fight will be adjusted to the official date and
                    will then follow normal rules.

                </p>

                <h3 class="pr-head">Explanation of Soccer Betting:</h3>
                <p class="pr-text">If all markets are settled based on the result at the end of regular time, including
                    injury or stoppage time. Extra time and penalties are not considered unless specified.
                    <br><br>
                    - If a match is played before the designated date or kick-off time, bets will be valid as long as
                    they were placed before the revised kick-off time.
                    <br>
                    - If the venue for a match is changed, bets placed before the change will be valid as long as the
                    home team is still designated as such. If the home and away teams are reversed for a listed match,
                    bets based on the original listing will be void.
                    <br>
                    - If a match is abandoned before the completion of regular time, all bets will be void unless the
                    match is rescheduled and played on the same date (local time), or specific rules state otherwise.
                    This exception does not apply to friendly matches, where all match markets will be settled based on
                    the actual result at the end of the match (excluding extra time) regardless of whether the full 90
                    minutes is played. This exception is only applicable to matches with regular playing time of two
                    45-minute halves.
                    <br>
                    - Some soccer matches may have different playing schedules. In such cases, the following rules
                    apply: for matches scheduled for 90 minutes of play (3 x 30 minutes), full-time bets are still
                    valid; for matches scheduled for 80 minutes of play (2 x 40 minutes), all bets are still valid; and
                    for matches with a playing schedule different from the above, all bets will be void.
                    <br>
                    - Bets on a match or qualification will not be affected if a team is subsequently disqualified from
                    or re-instated to the competition.
                    <br>
                    - If a match does not take place as scheduled and is not played on the same date (local time), all
                    bets will be void. However, an exception is made if an incorrect kick-off time is announced on our
                    website.
                </p>

                <h3 class="pr-head">GENERAL SETTLEMENT RULES</h3>
                <p class="pr-text">Unless stated otherwise, settlements for all bets will be determined by the
                    statistics and results obtained from the official website of the league's governing body or its
                    official statistical provider. If necessary information is not available from these sources, an
                    alternative reliable statistical source will be used for bet settlement.
                </p>
            </div>
        </div>
    </section>
@endsection