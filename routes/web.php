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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix'=> 'admin','namespace' => 'admin','middleware'=> 'auth'],function(){
	Route::get('/','AdminController@index')->name('admin');
	Route::resource('category','CategoryController');
	Route::resource('product','ProductController');
	Route::resource('banner','BannerController');
	Route::resource('user','userController');
	

});

Route::group(['prefix'=>'cart'],function(){
	Route::get('/','CartController@index')->name('cart');
	Route::get('add/{id}/{quantity?}','CartController@add')->name('cart.add');
	Route::get('remove/{id}','CartController@remove')->name('cart.remove');
	Route::get('update/{id}/{quantity?}','CartController@update')->name('cart.update');
	Route::get('clear','CartController@clear')->name('cart.clear');
});
Route::get('admin/logout','admin\AdminController@logout')->name('logout');

