<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use Validator;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use App\Models\Matchup;
use App\Models\Matchup_odd;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Session;
use Stripe;


use GuzzleHttp\Client;

class userDashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	
	protected $client;
    protected $apiKey = 'f1f4025c-a8a2-4b26-a44b-496c1fc78132';

    public function __construct()
    {
        $this->middleware(['auth']);
		$this->client = new Client([
            'base_uri' => 'https://jsonodds.com/api/',
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
      $data =  Matchup::with("Odds")->get();
    // $response = $this->client->get("sports", [
    //     'headers' => [
    //         'x-api-key' => $this->apiKey,
    //     ],
    // ]);
    // dd($response);
    //  $data = json_decode($response->getBody());
    
     return view('customer.index',$data);
    }	

	public function sport($id)
    {
	    $data['sport'] = '';
        
        

	    // return view('customer.sport',$data);
    }
	
	
	public function sport_game($id)
    {
        $data['sports'] =  Matchup::with("Odds")->where("Sport",$id)->get();
        
        
        return view('customer.sport_game',$data);
    }

    public function sport_game_live($id)
    {
        $response = $this->client->get("odds", 
        [
            'headers' => [
                'x-api-key' => $this->apiKey,
            ],
        ]);
        $data['sports'] = json_decode($response->getBody());
        dd($data['sports']);
        // return view('customer.sport_game',$data);
    }


    public function sport_view(Request $request,$id)
    {   
        $match = Matchup::with("latestOdds")->where("match_id",$id)->first();
        if(empty($match)){
            return abort(404);
        }
        return view('customer.match_detail',compact("match"));
    }
    
    public function profile()
    {
        return view('user.profile');
    }
    


    public function UserProfileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $this->validate($request, [
            'first_name' => 'nullable',
            'last_name' => 'nullable',
            'email' => 'nullable',
        ]);
    
        $password = Hash::make($request->password);

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = isset($password) ? $password : $user->password;
        $user->save();

        session::flash('success','profile Updated Successfully');
        return redirect()->back();

    }
    public function store_sport_data()
    {
        $response = $this->client->get("odds", 
        [
            'headers' => [
             'x-api-key' => $this->apiKey,
            ],
        ]);
        $odds = json_decode($response->getBody());
        foreach($odds as $k => $odd)
        {
            $ins_array = array(
                "match_id" => $odd->ID,
                "HomeTeam" => $odd->HomeTeam,
                "AwayTeam" => $odd->AwayTeam,
                "Sport" => $odd->Sport,
                "MatchTime" => $odd->MatchTime,
                "DisplayRegion" => $odd->DisplayRegion ?? "",
                "HomeROT" => $odd->HomeROT ?? 0,
                "AwayROT" => $odd->AwayROT ?? 0,
                "HomePitcher" => $odd->HomePitcher ?? "",
                "AwayPitcher" => $odd->AwayPitcher ?? "",
                "Preseason" => $odd->Preseason ?? 0,
            );
            $matchup = Matchup::create($ins_array);
            foreach($odd->Odds as $oddData){
                $ins_odd_array = array(
                    "EventID" => $oddData->EventID,
                    "SiteID" => $oddData->SiteID,
                    "MoneyLineHome" => $oddData->MoneyLineHome ?? 0,
                    "MoneyLineAway" => $oddData->MoneyLineAway ?? 0,
                    "DrawLine" => $oddData->DrawLine ?? "",
                    "PointSpreadHome" => $oddData->PointSpreadHome ?? 0,
                    "PointSpreadAway" => $oddData->PointSpreadAway ?? 0,
                    "PointSpreadHomeLine" => $oddData->PointSpreadHomeLine ?? "",
                    "PointSpreadAwayLine" => $oddData->PointSpreadAwayLine ?? "",
                    "TotalNumber" => $oddData->TotalNumber ?? 0,
                    "OverLine" => $oddData->OverLine ?? 0,
                    "UnderLine" => $oddData->UnderLine ?? 0,
                    "LastUpdated" => $oddData->LastUpdated ?? 0,
                    "OddType" => $oddData->OddType ?? 0,
                );
                if(!empty($oddData->Participant))
                {
                  $ins_odd_array["Participant"] = json_encode($oddData->Participant);
                }
                $matchup->Odds()->create($ins_odd_array);
            }
        }
      
    }
    public function UserEditProfile(Request $request){
   
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->paypal_email = $request->paypal_email;
        $user->venmo_number = $request->venmo_number;
        $user->connect_to_facebook = $request->connect_to_facebook;
        $user->save();

        session::flash('success','profile deatail Updated Successfully');
        return redirect()->back();
    }
    public function UserBankDetail(Request $request){
        
        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $user->account_number = $request->account_number;
        $user->rout_number = $request->route_number;
        $user->save();

        session::flash('success','Bank Detail Updated Successfully');
        return redirect()->back();
    }

    public function change_password()
    {
        return view('auth.change-password');
    }
    public function store_change_password(Request $request)
    {
        $user = Auth::user();
        $userPassword = $user->password;

        $validator =Validator::make($request->all(),[
          'oldpassword' => 'required',
          'newpassword' => 'required|same:password_confirmation|min:6',
          'password_confirmation' => 'required',
        ]);

        if(Hash::check($request->oldpassword, $userPassword)) 
        {
            return back()->with(['error'=>'Old password not match']);
        }

        $user->password = Hash::make($request->newpassword);
        $user->save();

        return redirect()->back()->with("success","Password changed successfully !");
    }

     
    
}
