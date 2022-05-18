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
Route::get('/links', 'HomeController@links')->name('links');
Route::get('/fans', 'HomeController@fans')->name('fans');
Route::get('/combines', 'HomeController@combines')->name('combines');
Route::get('/marketing', 'HomeController@marketing')->name('marketing');
Route::get('/stats', 'HomeController@stats')->name('stats');
Route::get('/highschools', 'HomeController@highschools')->name('highschools');
Route::get('/teams', 'HomeController@teams')->name('teams');
Route::get('/coaches', 'HomeController@coaches')->name('coaches');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('auth');
Route::group(['prefix'=>'dashboard', 'middleware' => 'auth'], function(){
	Route::get('/', ['as'=>'dashboard', 'uses' => 'DashboardController@index']);
	Route::resource('athletes', 'AthleteController');
	Route::resource('users', 'UserController');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	Route::group(['middleware'=>'only_admin_access'], function(){
		Route::resource('users', 'UserController');
		Route::post('user/password/{id}', ['as'=>'user_password', 'uses' =>  'UserController@updatePassword']);
		/* Route::get('settings', ['as'=>'settings', 'uses'=>'DashboardController@settings']);
		Route::post('settings', ['as'=>'update_settings', 'uses'=>'DashboardController@settingsUpdate']); */
	});
});
Route::get('athletes_ajax', 'AthleteController@getAthletes');