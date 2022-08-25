<?php

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
    return view('ex_home.index');
})->middleware('guest');

Route::get('/oohome', function () {
    return view('ex_home.index');
});


Route::get('/profile', 'ProfileController@index')->middleware('auth')->name('profile');
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
Route::get('/menu', 'HomeController@index');
Route::get('/answer/{id}','AnswerController@index')->name('answer');
Route::get('/quest/{data}','AnswerController@goToquest')->name('answer.search');

Auth::routes();

Route::get('/home', 'AuthController@index')->name('home');
