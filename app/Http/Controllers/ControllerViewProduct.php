<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ControllerViewProduct extends Controller
{
    public  function viewProducts(Request $request){
      $routeArray = explode('-', $request->route()->getName());
      $categorySlug = $routeArray[count($routeArray)-1];
      $categoryId = Category::where('slug', $categorySlug)->first()->id;

      $products = Product::where('is_active', 1)
        ->where('category_id', $categoryId)
        ->get();
      return view('dashboard-'.$categorySlug, compact('products'));
    }
}
