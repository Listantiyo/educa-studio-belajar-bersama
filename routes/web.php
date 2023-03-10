
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

Auth::routes();

Route::get('/', function () {
    return redirect(route('menu'));
});

Route::get('/oohome', function () {
    return view('question.index');
});

Route::get('/level', 'LevelController@index')->name('level');
// Home
Route::get('/menu', 'HomeController@index')->name('menu');

// Question
Route::get('/question', 'QuestionController@index')->name('questions');
Route::get('/questions-details/{id}', 'QuestionController@detail')->name('questions-details');
Route::get('/ask-questions', 'QuestionController@ask')->name('ask-questions');

// Most Answered Qs
Route::get('/most-answered', 'MostAnsweredController@index')->name('most-answered');
Route::get('/most-answered-details', 'MostAnsweredController@detail')->name('most-answered-details');

// Unasnwered Qs
Route::get('/unanswered', 'UnansweredController@index')->name('unanswered');

// MostVisited Qs
Route::get('/most-visited', 'MostVisitedController@index')->name('most-visited');

// FAQ
Route::get('/faq', 'FaqController@index')->name('faq');

Route::group(['middleware' => 'auth'], function () {



// Tags
Route::get('/tags', 'TagController@index')->name('tags');

// Communities

Route::get('/communities', 'CommunitiesController@index')->name('communities');
Route::get('/communitie/follows', 'CommunitiesController@follow')->name('communities-follow');

// Polls
Route::get('/polls', 'PollsController@index')->name('polls');


// Contact Us
Route::get('/contactus','ContactUsController@index')->name('contact-us');

// About us
Route::get('/abouts','AboutUsController@index')->name('about-us');

// Groups
Route::get('/groups', 'GroupsController@index')->name('groups');
Route::get('/groups/join', 'GroupsController@join')->name('groups-join');
Route::get('/groups/detail/{id}', 'GroupsController@detail')->name('groups-detail');
Route::get('/groups/detail/quest/{id}', 'GroupsController@detailQuest')->name('groups-quest-detail');
Route::get('/groups/ask/{id}', 'GroupsController@ask')->name('groups-ask');
// User Profile
Route::get('user-profile', 'UserProfileController@index')->name('user-profile');
Route::get('user-profile/edit', 'UserProfileController@edit')->name('profile-edit');
Route::get('user-profile/detail', 'UserProfileController@detail')->name('profile-detail');

// ------------------------------------------------------------

// Route::get('/profile/edit', 'ProfileController@editShow')->name('edit.profile');
// Route::get('/profile', 'ProfileController@index')->name('profile');
// Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
// Route::get('/answer/{id}','AnswerController@index')->name('answer');
// Route::get('/quest/{data}','AnswerController@goToquest')->name('answer.search');
Route::group(['middleware' => 'level:2'], function () {
Route::get('/home', 'AuthController@index')->name('home');

// ADMIN
Route::get('/admindashboard','AdminDashboardController@index')->name('admindashboard');
Route::get('/adminquestion','AdminQuestionController@index')->name('adminquest');

// Category
Route::get('/admincategory','AdminCategoryController@index')->name('category-admin');

// User
Route::get('/adminuser','AdminUserController@index')->name('user-admin');
Route::get('/adminuser/{adminuser}/edit','AdminUserController@edit')->name('editUser-admin');

// Question
Route::get('/adminquestion','AdminQuestionController@index')->name('quest-admin');
Route::get('/adminquestpending','AdminQuestionController@indexPending')->name('quest-admin-pending');

// Type
Route::get('/admintypes','AdminTypeController@index')->name('type-admin');

// Comunitty
Route::get('/admincomunitty','AdminCommunityController@index')->name('communities-admin');

// Answer
Route::get('/adminanswer','AdminAnswerController@index')->name('answer-admin');
Route::get('/adminanswerpending','AdminAnswerController@indexPending')->name('answer-admin-pending');

// Tag
Route::get('/admintag','AdminTagController@index')->name('tag-admin');

// Group
Route::get('/admingroup','AdminGroupController@index')->name('group-admin');

// Contact Us
Route::get('/admincontact','AdminContactUsController@index')->name('admin-contact');

});

});

