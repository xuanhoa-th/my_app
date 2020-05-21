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
    return view('welcome');
});
Route::get('/login', function() {
    return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::get('/calculator', function() {
    return view('calculator');
});
Route::post('/calculator' , function (Illuminate\Http\Request $request){

      $discount = $request->price * $request->percent * 0.1;
      $name = $request->name;
      $price = $request->price;
      $percent = $request->percent;


      return view('show_result',compact(['discount', 'name', 'price', 'percent']));

}) ;




