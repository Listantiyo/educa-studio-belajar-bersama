<?php

use App\Http\Controllers\DashboardController;
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
    return view('ex_edit.index'); 
});

// Route::get('/data/filter','DashboardController@filter');

Route::get('/data/search','Xample@search');

Route::get('/data/profile/question','ProfileController@showQuest');

Route::post('/data/profile/store','ProfileController@storeProfile');

Route::post('/data/store','DashboardController@store');

Route::get('/data/question','DashboardController@show_question');

Route::get('/data/answer','AnswerController@show_answer');

Route::post('/data/store/answer','AnswerController@store');

Route::post('/data/store/coment','AnswerController@storeComent');

// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('details', 'API\UserController@details');
//     Route::get('/my','DashboardController@my');
// });