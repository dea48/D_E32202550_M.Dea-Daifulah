<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\backend\DashboardController;


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



//Route::get('/diky', function () {
//    return 'welcome to my blok';
//});


//Route::get('/belajar', function () {
    
//echo '<h1>Hello World</h1>';		
//echo '<p>Sedang Belajar Laravel</p>';
//});


//Route::get('page/{nomor}', function ($nomor) {
//    return 'ini halaman ke-' .$nomor;
//});





//Route::get('/home', function () {
//    return view('frontend.home');
//});
//Route::get('/dashboard', function () {
//    return view('backend.dashboard');
//});



/*
Auth::routes();

Route::group(['namespace' =>'Frontend'],function()
    {
    	Route::get('/','HomeController@index');
    	Route::resource('home','HomeController');
	});

Route::group(['middleware' =>['web','auth']],function () {
	Route::group(['namespace' =>'Backend'],function ()
		{
			Route::resource('dashboard','DashboardController');
		});
});
*/
Auth::routes();

Route::group(['namespace' =>'Frontend'],function()
    {
    	Route::get('/','HomeController@index');
    	Route::resource('home','HomeController');
	});

Route::group(['middleware' =>['web','auth']],function () {
	Route::group(['namespace' =>'Backend'],function ()
		{
			Route::resource('dashboard','DashboardController');
		});
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware'=> ['web','auth']], function () {
	Route::group(['namespace'=>'Backend'], function()
	{
		Route::resource('dashboard','DashboardController');
		Route::resource('pendidikan','PendidikanController');
	});
});