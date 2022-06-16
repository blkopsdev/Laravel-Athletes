<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@about')->name('aboutus');
Route::get('/contact-us', 'HomeController@contact')->name('contact');
Route::post('/contact-us', 'ContactController@store')->name('contact_post');
Route::resource('/subscribes', 'CustomerController');
Route::get('/links', 'HomeController@links')->name('links');
Route::get('/fans', 'HomeController@fans')->name('fans');
Route::get('/combines', 'HomeController@combines')->name('combines');
Route::get('/marketing', 'HomeController@marketing')->name('marketing');
Route::get('/stats', 'HomeController@stats')->name('stats');
Route::get('/highschools', 'HomeController@highschools')->name('highschools');
Route::get('/teams', 'HomeController@teams')->name('teams');
Route::get('/coaches', 'HomeController@coaches')->name('coaches');

Auth::routes();

Route::group(['prefix' => 'premium'], function() {
	Route::group(['middleware' => 'premium_access'], function() {
		Route::get('/faq', 'HomeController@faq')->name('faq');
		Route::get('/database', 'AthleteController@showFilter')->name('database_filter');
		Route::get('/athlete-report', 'AthleteController@report')->name('athlete_report');
		Route::get('/athlete/{id}', 'AthleteController@showAthlete')->name('athlete.premium_show');
	});
	
	Route::get('login', 'CustomerController@login')->name('premium.login');
	Route::post('login', 'CustomerController@handleLogin')->name('premium.handleLogin');
	Route::get('logout', 'CustomerController@logout')->name('premium.logout');
});

// Route::get('premium/password/reset', 'Customer/ForgetPasswordController@')->name('premium.password.request');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('admin_access');
Route::group(['prefix'=>'dashboard', 'middleware' => 'auth'], function(){
	Route::get('/', ['as'=>'dashboard', 'uses' => 'DashboardController@index']);
	Route::get('/athletes/import', 'AthleteController@import')->name('athletes.import');
	Route::post('/athletes/import', 'AthleteController@importData')->name('athletes.import');
	Route::resource('athletes', 'AthleteController');
	Route::resource('users', 'UserController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::resource('users', 'UserController');
	Route::post('user/password/{id}', ['as'=>'user_password', 'uses' =>  'UserController@updatePassword']);

	Route::get('approved-customers', ['as' => 'approved_customers', 'uses' => 'CustomerController@approvedIndex']);
	Route::get('pending-customers', ['as' => 'pending_customers', 'uses' => 'CustomerController@pendingIndex']);
	Route::get('denied-customers', ['as' => 'denied_customers', 'uses' => 'CustomerController@deniedIndex']);
	Route::resource('customers', 'CustomerController')->except('index');
	/* Route::group(['middleware'=>'admin_access'], function(){
		Route::get('settings', ['as'=>'settings', 'uses'=>'DashboardController@settings']);
		Route::post('settings', ['as'=>'update_settings', 'uses'=>'DashboardController@settingsUpdate']);
	}); */
});
Route::get('athletes_ajax', 'AthleteController@getAthletes');
Route::get('athletes_report_ajax', 'AthleteController@getReport');
// Route::get('customers_approved_ajax', 'CustomerController@getApprovedCustomers');