<?php

use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('test', TestController::class);
Route::get('/','App\Http\Controllers\TestController@welcome')->name('welcome');
// / detail > front detail -> name(detail) untuk Manggil di route(detail)
Route::get('/detail','App\Http\Controllers\TestController@detail')->name('detail');
// / keranjang > front keranjang -> name(keranjang) untuk Manggil di route(keranjang)
Route::get('/keranjang','App\Http\Controllers\TestController@keranjang')->name('keranjang');
// / checkout > front checkou -> name(checkout) untuk Manggil di route(checkout)
Route::get('/checkout','App\Http\Controllers\TestController@checkout')->name('checkout');

Route::get('/login','App\Http\Controllers\TestController@login')->name('login');
Route::get('/daftar','App\Http\Controllers\TestController@daftar')->name('daftar');
