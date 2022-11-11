<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard-vegetables', function () {
    return view('dashboard-vegetables');
})->middleware(['auth', 'verified'])->name('dashboard-vegetables');

Route::get('/dashboard-animals', function () {
    return view('dashboard-animals');
})->middleware(['auth', 'verified'])->name('dashboard-animals');

Route::get('/checkout', function(){
    return view('checkout');
})->middleware(['auth', 'verified'])->name('checkout');

//=== test
Route::get('/create', [createSubscription::class, 'createProduct'])->middleware(['auth', 'verified'])->name('create');
require __DIR__.'/auth.php';
