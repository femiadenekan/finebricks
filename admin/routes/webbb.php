<?php

use Illuminate\Support\Facades\Route;
use App\User;

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
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function() {

	
	Route::get('/dashboard','ProfileController@dashboard');
	
	Route::get('/profile', function () {
		
	  return view('profile');
    });
	
	Route::get('/edit-profile','ProfileController@edit');

	Route::post('editprofile','ProfileController@update')->name('profile.update');
});	

Route::get('welcomemail','HomeController@WelcomeMail');
Route::get('/realtors','ProfileController@realtors');
Route::get('/referred-realtors/{slug}','ProfileController@refrealtors');



Route::get('/realtor/{slug}','ProfileController@user');
Route::get('/register/{ref}','ProfileController@register');


 Route::get('/clear1', function() {

Artisan::call('cache:clear');
Artisan::call('config:cache');
Artisan::call('view:clear');
Artisan::call('route:clear');
return "Cleared!";

});