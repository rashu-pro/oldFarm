<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ControllerProduct extends Controller
{
    public function viewProduct(){
      $categories = new Category;
      $categories = $categories->where('is_active', 1)->get();
      return view('admin/add-product', compact('categories'));
    }

    public function saveProduct(Request $request){
      $stripe = new \Stripe\StripeClient(
        env('STRIPE_SECRET')
      );

      $objProductCreated = $stripe->products->create([
        'name' => $request->name
      ]);
      if($objProductCreated){
        $products = new Product;
        $products->name = $request->name;
//        $products->stripe_id = $objProductCreated;
      }
//      return back()->withInput();
//      dd($filePath);
    }
}
