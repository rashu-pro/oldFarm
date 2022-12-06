<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\SubscriptionItems;
use App\Models\Subscriptions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Subscription;

class ControllerSubscription extends Controller
{
    public function createSubscriptions(Request $request){
      $stripe = new \Stripe\StripeClient(
        env('STRIPE_SECRET')
      );

      $subscriptions = new Subscriptions;
      $subscriptionItems = new SubscriptionItems;

      $count = 0;
      $customer = User::find(Auth::id())->stripe_id;
      if(!$customer){
        $objPaymentMethod = $stripe->paymentMethods->create([
          'type' => 'card',
          'card' => [
            'number' => $request->cardNumber,
            'exp_month' => $request->expMonth,
            'exp_year' => $request->expYear,
            'cvc' => $request->cvc,
          ]
        ]);

        $objCustomer = $stripe->customers->create([
          "payment_method" => $objPaymentMethod->id,
          "invoice_settings" => [
            "default_payment_method" => $objPaymentMethod->id]
        ]);

        $user = User::find(Auth::id());
        $user->stripe_id = $objCustomer->id;
        $user->save();

        $customer = User::find(Auth::id())->stripe_id;
      }

      foreach ($request->stripe_id as $product){
        $price = Price::where('stripe_product', $product)
          ->latest()
          ->first();
        $price_id = $price->stripe_id;
        $iteration = $price->recurring_iteration;
        $quantity = $request['productQuantity'][$count];
        $objScheduledSubscription = $stripe->subscriptionSchedules->create([
          'customer' => $customer,
          'start_date' => time(),
          'end_behavior' => 'cancel',
          'phases' => [
            [
              'items' => [
                [
                  'price' => $price_id,
                  'quantity' => $quantity,
                ],
              ],
              'iterations' => $iteration,
            ],
          ],
        ]);

        $subscriptions->user_id = Auth::id();
        $subscriptions->name = 'default';
        $subscriptions->stripe_id = $objScheduledSubscription->subscription;
        $subscriptions->stripe_status = $objScheduledSubscription->status;
        $subscriptions->stripe_price = $price_id;
        $subscriptions->quantity = $quantity;
        $subscriptions->scheduled_id = $objScheduledSubscription->id;
        $subscriptions->start_date = date('Y-m-d H:i:s',$objScheduledSubscription->current_phase->start_date);
        $subscriptions->end_date = date('Y-m-d', $objScheduledSubscription->current_phase->end_date);

        $isSubscriptionStored = $subscriptions->save();

        $objSubscriptions = $stripe->subscriptions->retrieve(
          $objScheduledSubscription->subscription,
        );

        $subscription = Subscription::where('stripe_id', $objScheduledSubscription->subscription)
          ->first();

        $subscriptionItems->subscription_id = $subscription->id;
        $subscriptionItems->stripe_id = $objSubscriptions->items->data[0]->id;
        $subscriptionItems->stripe_product = $request['stripe_id'][$count];
        $subscriptionItems->stripe_price = $price_id;
        $subscriptionItems->quantity = $quantity;
        $isSubscriptionItemStored = $subscriptionItems->save();
        $count++;
      }
      $subscriptions = Subscriptions::where('user_id', Auth::id());

      return redirect()->route('thank-you');
    }

    public function thankyou(){
      $subscriptions = Subscriptions::where('user_id', Auth::id());
      return view('thank-you', compact('subscriptions'));
    }

    public function redirectCheckout(){
      return view('checkout');
    }
}
