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
    return view('question.index');
});

Route::get('/oohome', function () {
    return view('question.index');
});


Route::get('/menu', 'HomeController@index')->name('menu');
Route::get('/question', 'QuestionController@index')->name('question');

Route::get('/profile/edit', 'ProfileController@editShow')->name('edit.profile');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
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

