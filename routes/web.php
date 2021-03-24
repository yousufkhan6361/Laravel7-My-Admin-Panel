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

// Routes For Front 

Route::get('/', function () {
	return view('welcome');
});

Route::get('home', 'HomeController@index')->name('home');
Route::get('test', 'PageController@index');















// Routes For Admin 
Route::group(['prefix' => 'admin'], function () {

	Route::get('', function () {
		return view('dashboard');
	});

Route::get('dashboard', 'DashboardController@initContent'); //This will resoluve AdminControllers\DashboardController file
Route::get('logo', 'LogoController@addlogo');
Route::post('logo/upload', 'LogoController@update_logo')->name('logo.upload');

//Home section content routes
Route::get('home', 'HomePageController@index');
Route::get('home/add-content', 'HomePageController@create');
Route::post('homestore','HomePageController@store')->name('home.store');
Route::get('home/edit/{id}',['as'=>'home.edit', 'uses'=>'HomePageController@edit']);
Route::post('cms-update/{id}' , ['as' => 'cms.update' , 'uses' => 'HomePageController@update']);
Route::get('home/delete/{id}' , ['as' => 'home.delete' , 'uses' => 'HomePageController@destroy']);

//About section content routes
Route::get('about', 'HomePageController@index');
Route::get('about/add-content', 'HomePageController@create');

//Contact page content routes
Route::get('contact', 'HomePageController@index');
Route::get('contact/add-content', 'HomePageController@create');

//Users section content routes
Route::get('users','UserController@showView');
Route::get('user/add-user', 'UserController@showUserForm');
Route::post('create-user','UserController@createUser')->name('create.user');
Route::get('user/edit/{id}',['as'=>'user.edit', 'uses'=>'UserController@edit']);
Route::post('user-update/{id}' , ['as' => 'user.update' , 'uses' => 'UserController@update']);
Route::get('user/delete/{id}' , ['as' => 'user.delete' , 'uses' => 'UserController@destroy']);

// Category section routes
Route::get('category','CategoryController@index');
Route::get('add-category','CategoryController@show');
Route::post("create-category","CategoryController@create")->name('create.category');
Route::get('category/edit/{id}',['as'=>'category.edit', 'uses'=>'CategoryController@edit']);
Route::post('category-update/{id}' , ['as' => 'category.update' , 'uses' => 'CategoryController@update']);
Route::get('category/delete/{id}' , ['as' => 'category.delete' , 'uses' => 'CategoryController@destroy']);

// Product section routes
Route::get('product','ProductController@index');
Route::get('add-product','ProductController@show');
Route::post('productstore','ProductController@store')->name('product.store');
Route::get('product/edit/{id}',['as'=>'product.edit','uses'=>'ProductController@edit']);
Route::post('product-update/{id}' , ['as' => 'product.update' , 'uses' => 'ProductController@update']);
Route::get('product/delete/{id}' , ['as' => 'product.delete' , 'uses' => 'ProductController@destroy']);
Route::get('show-gallery/{id}',['as'=>'show.gallery', 'uses'=> 'ProductController@showGallery']);
Route::post('upload-images','ProductController@storeImages')->name('upload.images');
Route::get('gallery/delete/{id}' , ['as' => 'gallery.delete' , 'uses' => 'ProductController@galleryDestroy']);

// Inquiry and newsletter section routes
Route::get('show-inquiries','InquiryController@showInquiries');
Route::get('delete/inquiry/{id}',['as'=>'delete.inquiry', 'uses'=>'InquiryController@destroy']);
Route::post('get/Inquiry','InquiryController@getInquiryData');

Route::post('dropzone/upload', 'DashboardController@upload')->name('dropzone.upload');
Route::get('dropzone/fetch', 'DashboardController@fetch')->name('dropzone.fetch');
Route::get('dropzone/delete', 'DashboardController@delete')->name('dropzone.delete');


});
