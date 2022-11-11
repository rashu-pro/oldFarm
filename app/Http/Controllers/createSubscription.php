<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createSubscription extends Controller
{
    public function createProduct(){
        echo env('STRIPE_SECRET');
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        //=== create product
        $objProductCreated = $stripe->products->create([
            'name' => 'Gold Special',
        ]);

        //=== create price
        $objPriceCreated = $stripe->prices->create([
            'unit_amount' => 200,
            'currency' => 'eur',
            'recurring' => ['interval' => 'month'],
            'product' => $objProductCreated->id,
        ]);

        $planId = $objPriceCreated->id;
        $planUnitPrice = $objPriceCreated->unit_amount;
        $planType = $objPriceCreated->type;
        $planCreated = $objPriceCreated->created;
        $planRecurring = $objPriceCreated->recurring->interval;

    }
}
