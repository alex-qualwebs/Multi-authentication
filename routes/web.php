<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;

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

Route::get('/',function(){
   
   if(auth::guard('user')->check())
   {
   	 return redirect()->route('userview');
   }

   else if(auth::guard('admin')->check())
   {
     return redirect()->route('adminview');
   }
   else
   {
   	  return view('welcome');
   }


});

Route::prefix('admin')->namespace('Auth\Admin')->group(function(){

	 // Authentication Routes...
     Route::get('login','LoginController@showLoginForm')->name('admin.login');
     Route::post('login','LoginController@login');
     Route::post('logout','LoginController@logout')->name('admin.logout');

     // Registration Routes...
     Route::get('register','RegisterController@showRegistrationForm')->name('admin.register');
     Route::post('register','RegisterController@register');

});



Route::prefix('admin')->namespace('Admin')->group(function(){

	Route::get('dashboard','Dashboardcontroller@index')->name('adminview')->middleware('auth:admin','verified');

});

Route::prefix('user')->namespace('User')->group(function(){

	Route::get('dashboard','Dashboardcontroller@index')->name('userview')->middleware('auth:user','verified');

});





Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
