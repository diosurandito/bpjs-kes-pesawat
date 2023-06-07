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
	//AUTH STAFF
	Route::get('login', 'Admin\AuthController@showLogin')->name('admin.showlogin');
	// Route::post('login','Staff\AuthStaffController@login')->name('staff.login');
	// Route::post('logout','Staff\AuthStaffController@logoutStaff')->name('staff.logout');
});
