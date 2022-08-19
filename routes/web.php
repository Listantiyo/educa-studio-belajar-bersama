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
    return view('ex_login.login');
});

Route::get('/oohome', function () {
    return view('ex_navbar.index');
});

Route::get('/dashboard', 'DashboardController@index');
Route::get('/menu', 'HomeController@index');
Route::get('/answer','AnswerController@index')->name('answer');

Auth::routes();

Route::get('/home', 'AuthController@index')->name('home');
