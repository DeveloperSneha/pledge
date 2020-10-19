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
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/cm', 'HomeController@create');
Route::get('/state/{id_state}/districts', 'HomeController@getDistricts');

Route::get('/creg', 'Auth\CandidateRegisterController@sendReg');
Route::get('/cregister', 'Auth\CandidateRegisterController@showRegistrationForm')->name('candidate.register');
Route::post('/cregister', 'Auth\CandidateRegisterController@register')->name('candidate.register.submit');
Route::get('/clogin', 'Auth\CandidateLoginController@showLoginForm')->name('candidate.login');
Route::post('/clogin', 'Auth\CandidateLoginController@login')->name('candidate.login.submit');  
Route::post('/clogout', 'Auth\CandidateLoginController@logout')->name('candidate.logout');
Route::get('/alogin', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/alogin', 'Auth\AdminLoginController@login')->name('admin.login.submit');  
Route::post('/alogout', 'Auth\AdminLoginController@logout')->name('admin.logout');

// Route::group(['middleware' => ['auth']], function() {
	
Route::get('/admin', 'AdminController@index');
Route::get('/statewise', 'AdminController@getPledgeStateWise');
Route::get('/districtwise', 'AdminController@getPledgeDistrictWise');
Route::get('/pledges', 'AdminController@getCandidates');
Route::get('/suggest', 'AdminController@getSuggestion');
Route::get('/recommend', 'AdminController@getRecommendation');
Route::get('/enroll', 'AdminController@getEnrolled');
Route::get('/candidate', 'Candidate\CandidateController@index');
Route::get('/promote', 'Candidate\CandidateController@promote');
Route::get('/test/{testName}','Candidate\CandidateController@showTest');  
// });  

Route::get('scheme/{idScheme}/sectors','Candidate\EnrollmentController@getSectors');
Route::get('sector/{idSector}/jobroles','Candidate\EnrollmentController@getJobRole');
Route::get('district/{idDistrict}/blocks','Candidate\EnrollmentController@getBlocks');
Route::resource('enrollment','Candidate\EnrollmentController');
Route::get('enrollment','Candidate\EnrollmentController@index');
Route::resource('recommendation','Candidate\RecommandationController');
Route::resource('suggestion','Candidate\SuggestionController');


