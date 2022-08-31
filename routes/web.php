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


Route::get('/profile/edit', 'ProfileController@editShow')->name('edit.profile');
Route::get('/profile', 'ProfileController@index')->middleware('auth')->name('profile');
Route::get('/dashboard', 'DashboardController@index')->middleware('auth')->name('dashboard');
Route::get('/menu', 'HomeController@index')->middleware('guest')->name('menu');
Route::get('/answer/{id}','AnswerController@index')->name('answer');
Route::get('/quest/{data}','AnswerController@goToquest')->name('answer.search');

Auth::routes();

Route::get('/home', 'AuthController@index')->name('home');

// ADMIN
Route::get('/admindashboard','AdminDashboardController@index')->name('admindashboard');
Route::get('/adminquestion','AdminQuestionController@index')->name('adminquest');

// Kelas
Route::get('/adminkelas','AdminKelasController@index')->name('kelas');

// Mapel
Route::get('/adminmapel','AdminMapelController@index')->name('matapelajaran');

// User
Route::get('/adminuser','AdminUserController@index')->name('user');