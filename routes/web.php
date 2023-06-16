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

// Route::get('/', function () {
//     return view('pages.admin.auth.login');
// });

Route::get('/', function () {
    return redirect('/login');
});
Route::get('/admin', function () {
    return redirect('/admin/login');
});

Route::group(['prefix' => '/admin'], function()
{
	//AUTH ADMIN
	Route::get('login', 'Admin\AuthController@showLogin')->name('admin.showlogin');
	// Route::post('login','Admin\AuthController@login')->name('admin.login');
	// Route::post('logout','Admin\AuthController@logout')->name('admin.logout');
});
Route::group(['prefix' => '/'], function()
{
	//AUTH USER
	Route::get('login', 'User\AuthController@showLogin')->name('user.showlogin');
	Route::post('login','User\AuthController@login')->name('user.login');
	Route::post('logout','User\AuthController@logout')->name('user.logout');

	// HOME
	Route::get('home', 'User\HomeController@index')->name('user.home');

	// PROFILE
    Route::name('user.profile.')->group(function () {
        Route::patch('/profile/update', 'User\HomeController@editProfile')->name('update');
    });
});
