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

Route::get('/ex', function () {
    return view('detail_question.index'); 
});

Route::get('/data/f','Xample@filter');

Route::post('/data/store','Xample@store');

Route::get('/data/q','Xample@show_question');

Route::get('/data/answer','AnswerController@show_answer');


// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('details', 'API\UserController@details');
//     Route::get('/my','Xample@my');
// });