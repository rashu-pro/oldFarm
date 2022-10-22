<?php

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

Route::get('/dashboard-demo', function(){
    return view('dashboard-demo');
});

require __DIR__.'/auth.php';
