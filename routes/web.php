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
//-------------Home----------------
Route::get('/', 'HomeController@index')->name('home');
Route::get('home_login','HomeController@login')->name('home_login');
Route::post('home_login','HomeController@post_login')->name('home_login');
Route::get('logout','HomeController@logout')->name('home_logout');
Route::get('contact','HomeController@contact')->name('home_contact');
Route::post('post_contact','HomeController@post_contact')->name('post_contact');
Route::get('testmail','HomeController@test_mail');
Route::get('register','HomeController@register')->name('register');
Route::post('register','HomeController@post_register')->name('register');
Route::get('shop_page','HomeController@shop_page')->name('shop_page');
Route::get('-{slug}','HomeController@view')->name('view');
Route::get('shop_page_left','HomeController@shop_page_left')->name('shop_page_left');



//-------------Cart-------------
Route::group(['prefix'=>'cart'],function(){
	Route::get('/','CartController@index')->name('cart');
	Route::get('add/{id}/{quantity?}','CartController@add')->name('cart.add');
	Route::get('remove/{id}','CartController@remove')->name('cart.remove');
	Route::get('update/{id}/{quantity?}','CartController@update')->name('cart.update');
	Route::get('clear','CartController@clear')->name('cart.clear');
});

//-------------Checkout---------------
Route::group(['prefix'=>'checkout'],function(){
	Route::get('/','CheckoutController@form')->name('checkout');
	Route::post('/','CheckoutController@post_form')->name('checkout');
	
	
});

//-------------admin-------------
Route::group(['prefix'=> 'admin','namespace' => 'admin','middleware'=> 'auth'],function(){
	Route::get('/','AdminController@index')->name('admin');
	Route::resource('category','CategoryController');
	Route::resource('product','ProductController');
	Route::resource('banner','BannerController');
	Route::resource('user','userController');
	

});


Route::get('admin/logout','admin\AdminController@logout')->name('logout');

//test
Route::get('test','admin\userController@test');
