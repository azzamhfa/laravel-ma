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
$baseController =  "App\Http\Controllers";


Route::get('/', $baseController.'\HomeController@home');
Route::get('/admin', $baseController.'\HomeController@home');
Route::get('/login', $baseController.'\LoginController@login');
Route::get('/register', $baseController.'\RegisterController@register');

Route::get('/konfirmasi', function(){
    return view('konfirmasi_pembayaran');
});

//BUAT SESSION
Route::get('/addcart', $baseController.'\CartController@addToCart');
Route::get('/session', $baseController.'\CartController@accessSessionData');