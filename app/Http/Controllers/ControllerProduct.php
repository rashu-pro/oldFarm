<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Price;

class ControllerProduct extends Controller
{
    public function viewProduct(){
      $categories = new Category;
      $categories = $categories->where('is_active', 1)->get();
      return view('admin/add-product', compact('categories'));
    }

    public function saveProduct(Request $request){
      $request->validate([
        'image_url' => 'required|mimes:jpg,bmp,png|max:2048',
      ]);

      $stripe = new \Stripe\StripeClient(
        env('STRIPE_SECRET')
      );

      $objProductCreated = $stripe->products->create([
        'name' => $request->name
      ]);
      if($objProductCreated){
        $fileName = time().'.'.$request->image_url->extension();
        $request->image_url->move(public_path('uploads'), $fileName);
        $products = new Product;
        $products->name = $request->name;
        $products->stripe_id = $objProductCreated->id;
        $products->unit_price = $request->unit_price;
        $products->excerpt = $request->excerpt;
        $products->category_id = $request->productCategory;
        $products->description = $request->description;
        $products->image_url = $fileName;
        $products->is_active = 1;
        $status = $products->save();

        if(!$status) return back()
          ->with('error','Something went wrong! Try again.');

        return back()
          ->with('success','The Product '.$request->name.' has been saved succesfully.');
      }
      return back()
        ->with('error','Something went wrong! Try again.')
        ->withInput();
//      dd($filePath);
    }

    public function addPrice(){
      $products = new Product;
      $products = $products->where('is_active', 1)->get();
      return view('admin/add-price', compact('products'));
    }

  /**
   * @throws \Stripe\Exception\ApiErrorException
   */
  public function savePrice(Request $request){
      $stripe = new \Stripe\StripeClient(
        env('STRIPE_SECRET')
      );
      $unitPrice = Product::where('is_active', 1)
        ->where('stripe_id', $request->stripe_product)
        ->first()->unit_price;
      $unitAmount = round(($unitPrice/$request->recurring_iteration), 2)*100;
      $objPriceCreated = $stripe->prices->create([
        'unit_amount' => $unitAmount,
        'currency' => 'eur',
        'recurring' => ['interval' => $request->recurring_interval],
        'product' => $request->stripe_product,
      ]);

      if(!$objPriceCreated) return back()
        ->with('error','Something went wrong! Try again.');

      $prices = new Price;

      $prices->stripe_id = $objPriceCreated->id;
      $prices->stripe_product = $objPriceCreated->product;
      $prices->unit_price = $objPriceCreated->unit_amount;
      $prices->recurring_interval = $objPriceCreated->recurring->interval;
      $prices->interval_count = $objPriceCreated->recurring->interval_count;
      $prices->recurring_iteration = $request->recurring_iteration;
      $status = $prices->save();

      if(!$status) return back()
        ->with('error','Something went wrong! Try again.');

      return back()
        ->with('success','A price has been attached to the product!');
//      dd($request);
    }
}
