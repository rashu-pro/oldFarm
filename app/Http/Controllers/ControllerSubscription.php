<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerSubscription extends Controller
{
    public function createSubscriptions(Request $request){
      $stripe = new \Stripe\StripeClient(
        env('STRIPE_SECRET')
      );

      dd($request);

      $userId = Auth::id();
      $user = User::find($userId);
      $stripe->subscriptionSchedules->create([
        'customer' => $user->stripe_id,
        'start_date' => time(),
        'end_behavior' => 'cancel',
        'phases' => [
          [
            'items' => [
              [
                'price' => 'price_1M0p2OGynPrdxMfbV1BpNFD3',
                'quantity' => 1,
              ],
            ],
            'iterations' => 12,
          ],
        ],
      ]);
    }
}
