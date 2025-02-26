<?php


namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Betting;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class BettingController extends Controller
{
    //

    public function place_total_bet(request $request)
    {
      $formData = $request->input('formData');
      $validator = Validator::make($request->all(), [
          'match_id' => 'required|max:255',
          'TeamROT' => 'required',
          'pts' => 'required',
      ]);
      $exist = Betting::where("user_id",Auth::id())->where( "match_id",$formData['match_id'])
      ->where("TeamROT",$formData['TeamROT'])->where("Type","spread")->first();
      // dd($exist);
      if(!empty($exist))
      { 
        return response()->json(['error'=>'You already placed a bet on this match']);
      }
      if ($validator->fails()) 
      {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
      }
     $bea = Betting::create([
        "user_id" => Auth::id(),
        "match_id" => $formData['match_id'],
        "TeamROT" => $formData['TeamROT'],
        "pts" => $formData['pts'],
        "bet_amount" => $formData['bet_amount'],
        "Type" => "spread",
      ]);
      // dd($bea);
      return response()->json(['success'=>'bet successfully placed']);
    }
    public function place_Spread_betting(request $request)
    {
        $validator = Validator::make($request->all(), [
            'match_id' => 'required|max:255',
            'TeamROT' => 'required',
            'pts' => 'required',
            'bet_amount' => 'required',
        ]);
      $exist = Betting::where("user_id",Auth::id())->where( "match_id",$request->match_id)
      ->where("TeamROT",$request->TeamROT)->where("Type","spread")->first();
      if(!empty($exist))
      { 
        return redirect()->back()
                ->withErrors(["error" => "You already placed a bet on this match"])
                ->withInput();
      }
      if ($validator->fails()) 
      {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
      }
     Betting::create([
        "user_id" => Auth::id(),
        "match_id" => $request->match_id,
        "TeamROT" => $request->TeamROT,
        "pts" => $request->pts,
        "bet_amount" => $request->pts,
        "Type" => "spread",
      ]);
      return redirect()->back()->with('success', 'bet successfully placed');
    }
    public function place_moneyline_betting(request $request)
    {
        $validator = Validator::make($request->all(), [
            'match_id' => 'required|max:255',
            'TeamROT' => 'required',
            'Line' => 'required',
            'bet_amount' => 'required',
            'win_amount' => 'required',
        ]);
      $exist = Betting::where("user_id",Auth::id())->where( "match_id",$request->match_id)
      ->where("TeamROT",$request->TeamROT)->where("Type","ml")->first();
      if(!empty($exist))
      { 
        return redirect()->back()
                ->withErrors(["error" => "You already placed a bet on this match"])
                ->withInput();
      }
      if ($validator->fails()) 
      {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
      }
     Betting::create([
        "user_id" => Auth::id(),
        "match_id" => $request->match_id,
        "TeamROT" => $request->TeamROT,
        "line" => $request->line,
        "bet_amount" => $request->bet_amount,
        "win_amount" => $request->win_amount,
        "Type" => "ml",
      ]);
      return redirect()->back()->with('success', 'bet successfully placed');
    }
}
