<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('auth/login');
});

Route::get('/dashboard-main', function () {
  return view('dashboard-main');
})->middleware(['auth', 'verified'])->name('dashboard-main');

Route::get('/dashboard', function () {
  return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard-animals', [ControllerViewProduct::class, 'viewProducts'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard-animals');

Route::get('/dashboard-vegetables', [ControllerViewProduct::class, 'viewProducts'])
  ->middleware(['auth', 'verified'])
  ->name('dashboard-vegetables');

Route::get('/dashboard-fruits', [ControllerViewProduct::class, 'viewProducts'])
  ->middleware(['auth', 'verified'])
  ->name('dashboard-fruits');

Route::post('/checkout', [ControllerCheckout::class, 'viewCheckout'])
    ->middleware(['auth', 'verified'])
    ->name('checkout');

//Route::post('/checkout', function () {
//  return view('checkout');
//})->middleware(['auth', 'verified'])->name('checkout');

Route::post('/add-subscription', [ControllerSubscription::class, 'createSubscriptions'])
    ->middleware(['auth', 'verified'])
    ->name('add-subscription');

Route::get('/thank-you', function () {
  return view('thank-you');
})->middleware(['auth', 'verified'])
  ->name('thank-you');


// add category
Route::get('/add-category', function (){
  return view('admin/add-category');
})->middleware(['auth', 'verified'])->name('add-category');
Route::post('/insert-category', [Cateogy::class, 'insertCategory'])->middleware(['auth', 'verified'])->name('insert-category');

// add product and price
//Route::get('/add-product', function(){
//  return view('admin/add-product');
//})->middleware(['auth', 'verified'])->name('add-product');

Route::get('/add-product', [ControllerProduct::class, 'viewProduct'])
    ->middleware(['auth', 'verified'])
    ->name('add-product');
Route::post('/save-product', [ControllerProduct::class, 'saveProduct'])
    ->middleware(['auth', 'verified'])
    ->name('save-product');

Route::get('/admin/add-price', [ControllerProduct::class, 'addPrice'])
  ->middleware(['auth', 'verified'])
  ->name('/admin/add-price');
Route::post('/admin/save-price', [ControllerProduct::class, 'savePrice'])
  ->middleware(['auth', 'verified'])
  ->name('admin/save-price');

//=== test
Route::get('/create', [createSubscription::class, 'createProduct'])->middleware(['auth', 'verified'])->name('create');

require __DIR__ . '/auth.php';
