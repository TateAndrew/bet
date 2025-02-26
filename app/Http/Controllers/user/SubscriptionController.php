<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Stripe;
use Session;
use Stripe\Customer;
use Stripe\Subscription;
use Auth;
use App\Models\User;

use App\Models\Package;

class SubscriptionController extends Controller
{
    
    public function stripePost(Request $request)
    {
		
        try {
            // Set your Stripe API key
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // Convert the amount from dollars to cents
			$amountInCents = $request->amount * 100;

            // Create a charge using Stripe API
            Stripe\Charge::create([
                "amount" => $amountInCents, // Amount in cents
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from https://virtuexolutions.com."
            ]);
			$package = Package::where('id',$request->package_id)->first();
			
            $user = Auth::user();
            $user = User::where('id',$user->id)->first();
            $user->payment_status = 1;
            $user->no_of_bets = $package->no_of_bets;
			$user->save();
            // Payment successful, flash success message
            Session::flash('success', 'Payment successful!');
            // return redirect()->route('user_joke');
            return redirect()->back();
            
        } catch (\Stripe\Exception\CardException $e) {
            // Card error occurred, handle it
            Session::flash('error', $e->getError()->message);
        }

        // Redirect back to the previous page
        return back();
    }
}