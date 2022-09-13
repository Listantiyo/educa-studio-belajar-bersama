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

Route::get('/question', 'QuestionController@index')->name('questions');
Route::get('/queations-details', 'QuestionController@detail')->name('queations-details');
Route::get('/ask-questions', 'QuestionController@ask')->name('ask-questions');

Route::get('/communities', 'CommunitiesController@index')->name('communities');

Route::get('/most-answered', 'MostAnsweredController@index')->name('most-answered');
Route::get('/most-answered-details', 'MostAnsweredController@detail')->name('most-answered-details');

Route::get('/unanswered', 'UnansweredController@index')->name('unanswered');

Route::get('/most-visited', 'MostVisitedController@index')->name('most-visited');

Route::get('/polls', 'PollsController@index')->name('polls');

Route::get('/faq', 'FaqController@index')->name('faq');

Route::get('/groups', 'GroupsController@index')->name('groups');

// ------------------------------------------------------------

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

// // Kelas
// Route::get('/adminkelas','AdminKelasController@index')->name('kelas');

// // Mapel
// Route::get('/adminmapel','AdminMapelController@index')->name('matapelajaran');

// Category
Route::get('/admincategory','AdminCategoryController@index')->name('category');

// User
Route::get('/adminuser','AdminUserController@index')->name('user');
Route::get('/adminuser/{adminuser}/edit','AdminUserController@edit')->name('editUser');

// Status
Route::get('/adminstatus','AdminStatusController@index')->name('status');

// Comunitty
Route::get('/admincomunitty','AdminComunittyController@index')->name('comunitty');

// Answer
Route::get('/adminanswer','AdminAnswerController@index')->name('answer');

// Tag
Route::get('/admintag','AdminTagController@index')->name('tag');

