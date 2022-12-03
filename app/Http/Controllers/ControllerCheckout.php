<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerCheckout extends Controller
{
    public function viewCheckout(Request $request){
      $stripe = new \Stripe\StripeClient(
        env('STRIPE_SECRET')
      );

      $hasPaymentMethod = [
        'status' =>false
      ];
      $isCustomer = User::find(Auth::id());
      if(!$isCustomer->stripe_id) return view('checkout', compact('hasPaymentMethod'));

      $customerStripe = $stripe->customers->retrieve(
        $isCustomer->stripe_id
      );

      if($customerStripe->invoice_settings->default_payment_method == null) return view('checkout', compact('hasPaymentMethod'));
      $paymentMethod = $stripe->paymentMethods->retrieve(
        $customerStripe->invoice_settings->default_payment_method
      );
      $hasPaymentMethod = [
        'status' =>true,
        'last4' => $paymentMethod->card->last4
      ];
      return view('checkout', compact('hasPaymentMethod'));
    }
}
