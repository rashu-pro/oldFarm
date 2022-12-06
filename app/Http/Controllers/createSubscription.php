<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserORM;
use Illuminate\Support\Facades\Auth;
use Laravel\Cashier\Cashier;

class createSubscription extends Controller
{
  public function createSubscriptions(Request $request)
  {
    $stripe = new \Stripe\StripeClient(
      env('STRIPE_SECRET')
    );

    $id = Auth::id();
    $currentUser = UserORM::find($id);
    if (!$currentUser->stripe_id) {
      //=== creates payment method
      $objPaymentMethod = false;
      $objPaymentMethod = $stripe->paymentMethods->create([
        'type' => 'card',
        'card' => [
          'number' => $request->cardNumber,
          'exp_month' => $request->expiryMonth,
          'exp_year' => $request->expiryYear,
          'cvc' => $request->cvc,
        ]
      ]);

      if (!$objPaymentMethod) return redirect('/dashboard')->with('status', 'error');

      $objCustomer = $stripe->customers->create([
        "payment_method" => $objPaymentMethod->id,
        "invoice_settings" => [
          "default_payment_method" => $objPaymentMethod->id]
      ]);

      if (!$objCustomer) return redirect('/dashboard')->with('status', 'error');
      //=== after customer creation
      if ($objCustomer) {
        //=== stores customer into database
        $currentUser->stripe_id = $objCustomer->id;
        $currentUser->pm_type = $objPaymentMethod->type;
        $currentUser->pm_last_four = $objPaymentMethod->card->last4;
        $currentUser->save();
      }
    }

    $user = Cashier::findBillable($currentUser->stripe_id);

    $count = 0;
    $objSubscription = false;
    foreach ($request->ProductName as $item) {
      //=== create product
      $objProductCreated = $stripe->products->create([
        'name' => $item,
      ]);

      //=== create price and
      $objPriceCreated = false;
      if ($objProductCreated) {
        $objPriceCreated = $stripe->prices->create([
          'unit_amount' => $request->ProductUnitPrice[$count] * 100,
          'currency' => 'eur',
          'recurring' => ['interval' => 'month'],
          'product' => $objProductCreated->id,
        ]);
      }
      $objSubscription = $user->newSubscription('default', $objPriceCreated->id)
        ->quantity($request->ProductQuantity[$count])
        ->create($user->defaultPaymentMethod()->id);
      $count++;
    }
    if (!$objSubscription) return redirect('/dashboard')->with('status', 'error');

    return redirect('/dashboard')->with('status', 'success');
  }
}
