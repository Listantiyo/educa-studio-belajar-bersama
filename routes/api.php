<?php

use App\Http\Controllers\Xample;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/my','Xample@my');
Route::get('/ex', function () {
    return view('ex_register.register'); 
});

Route::get('/data/f','Xample@filter');

Route::post('/data/store','Xample@store');

Route::get('/data/q','Xample@show_question');

Route::get('/data/a','Xample@show_answer');
