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

Route::get('/my','XampleController@my');
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
Route::get('quest/likedislike','QuestionController@likedislike');
Route::post('quest/likedislikestore','QuestionController@likedislikestore');
Route::post('quest/store','QuestionController@store');
Route::put('quest/update','QuestionController@update');
Route::delete('quest/delete','QuestionController@delete');
// API Tag
Route::get('tag/show','TagController@show');
Route::get('tag/search','TagController@search');
// Communities
Route::post('community/follow', 'CommunitiesController@follow');
Route::get('community/follow/show', 'CommunitiesController@showfollow');

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

// User
Route::get('/data/admin/user','AdminUserController@showUser');
Route::get('/data/admin/edit/user','AdminUserController@dataEdit');
Route::post('data/admin/user/update','AdminUserController@update');
Route::delete('data/admin/user/delete/{id}','AdminUserController@destroy');

// Question
Route::get('/data/admin/quest','AdminQuestionController@showQuest');
Route::post('/data/admin/edit/question','AdminQuestionController@editQuest');
Route::delete('/data/admin/quest/{id}','AdminQuestionController@destroy');

// Answer
Route::get('/data/admin/answer','AdminAnswerController@showAnswer');
Route::post('/data/admin/edit/answer','AdminAnswerController@editQuest');
Route::delete('/data/admin/answer/{id}','AdminAnswerController@destroy');

// Tags
Route::get('/data/admin/tag','AdminTagController@showTag');
Route::get('/data/admin/edit/tag','AdminTagController@dataEdit');
Route::post('data/admin/tag/update','AdminTagController@update');
Route::post('data/admin/tag/store','AdminTagController@store');
Route::delete('data/admin/tag/delete/{id}','AdminTagController@destroy');

// Mapel
Route::get('/data/admin/mapel','AdminMapelController@showMapel');
Route::delete('/data/admin/mapel/{id}','AdminMapelController@destroy');

// Communites
Route::get('/data/admin/commu','AdminCommunityController@showCommunities');
Route::post('/data/admin/commu/store','AdminCommunityController@store');
Route::get('/data/admin/commu/edit','AdminCommunityController@dataEdit');
Route::post('data/admin/commu/update','AdminCommunityController@update');
Route::delete('data/admin/commu/delete/{id}','AdminCommunityController@destroy');

// Type
Route::get('/data/admin/type','AdminTypeController@showType');
Route::post('/data/admin/type/store','AdminTypeController@store');
Route::get('/data/admin/type/edit','AdminTypeController@dataEdit');
Route::post('data/admin/type/update','AdminTypeController@update');
Route::delete('data/admin/type/delete/{id}','AdminTypeController@destroy');

// Kelas
Route::get('/data/admin/kelas','AdminKelasController@showKelas');
Route::delete('/data/admin/kelas/{id}','AdminKelasController@destroy');


// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('details', 'API\UserController@details');
//     Route::get('/my','DashboardController@my');
// });