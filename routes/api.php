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

// Route::get('/my','XampleController@my');
Route::get('/ex', function () {
    return view('ex_edit.index'); 
});

// API Menu
Route::get('menu/show','HomeController@show');
Route::post('menu/store','HomeController@store');
Route::put('menu/update','HomeController@update');
Route::delete('menu/delete','HomeController@delete');
// API Question
Route::get('quest/show','QuestionController@show');
Route::get('quest/search','QuestionController@search');
Route::post('quest/store','QuestionController@store');
Route::put('quest/update','QuestionController@update');
Route::delete('quest/delete','QuestionController@delete');

// ----------------------------------------------------------

// Route::get('/data/filter','DashboardController@filter');

// Route::get('/data/search','XampleController@search');

// API Profile
Route::get('/data/profile/question','ProfileController@showQuest');
Route::post('/data/profile/store','ProfileController@storeProfile');
// API Dashboard
Route::post('/data/store','DashboardController@store');
Route::get('/data/question','DashboardController@show_question');
// API Answer
Route::get('/data/answer','AnswerController@show_answer');
Route::post('/data/store/answer','AnswerController@store');
Route::post('/data/store/coment','AnswerController@storeComent');
Route::post('/data/show/coment','AnswerController@showComment');

// ADMIN
Route::post('/adminuser/update/','AdminUserController@update');
Route::post('/adminquestion/update','AdminQuestionController@update');

// Question
Route::get('/data/admin/quest','AdminQuestionController@showQuest');
Route::post('/data/admin/edit/{id}','AdminQuestionController@editQuest');
Route::delete('/data/admin/quest/{id}','AdminQuestionController@destroy');

// Answer
Route::get('/data/admin/answer','AdminAnswerController@showAnswer');
Route::post('/data/admin/edit/{id}','AdminAnswerController@editQuest');
Route::delete('/data/admin/answer/{id}','AdminAnswerController@destroy');

// Mapel
Route::get('/data/admin/mapel','AdminMapelController@showMapel');
Route::delete('/data/admin/mapel/{id}','AdminMapelController@destroy');
// Kelas
Route::get('/data/admin/kelas','AdminKelasController@showKelas');
Route::delete('/data/admin/kelas/{id}','AdminKelasController@destroy');


// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('details', 'API\UserController@details');
//     Route::get('/my','DashboardController@my');
// });