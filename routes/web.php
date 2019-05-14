<?php

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

Route::get('/', 'UserController@index');

Route::get('/index', 'UserController@index');

Route::get('/store', 'UserController@store');

Route::get('/product', 'UserController@product');

Route::get('/checkout', 'UserController@checkout');

Route::get('/login','AccountController@loginView');

Route::post('/login','AccountController@postLogin')->name('login');

Route::group(['prefix'=>'admin','middleware'=>'admin'],
	function(){
		Route::get('/',function(){
		return view('admin.index');
		});
		Route::get('/index',function(){
			return view('admin.index');
		});

		Route::get('information/colors',function(){
			return view('admin.colors');
		});

		Route::get('information/displays',function(){
			return view('admin.displays');
		});

		Route::get('information/storages',function(){
			return view('admin.storages');
		});

		Route::get('information/operating_systems',function(){
			return view('admin.opoperating_systems');
		});

		Route::get('/brands',function(){
			return view('admin.brands');
		});

		Route::get('/products',function(){
			return view('admin.products');
		});

		
		Route::get('/orders',function(){
			return view('admin.orders');
		});

		Route::get('/orderdetails',function(){
			return view('admin.orderdetails');
		});

		Route::get('/users',function(){
			return view('admin.users');
		});

		Route::get('/comments',function(){
			return view('admin.comments');
		});

		Route::get('/slides',function(){
			return view('admin.slides');
		});

		// =========================================

		// colors
		Route::post('color','AdminController@color');

		Route::get('color_information','AdminController@colorInformation');

		Route::post('color_edit','AdminController@colorEdit');

		Route::post('color_delete','AdminController@colorDelete');
		// end colors

		// displays
		Route::post('display','AdminController@display');

		Route::get('display_information','AdminController@displayInformation');

		Route::post('display_edit','AdminController@displayEdit');

		Route::post('display_delete','AdminController@displayDelete');
		// end displays

		// stogares
		Route::post('storage','AdminController@storage');

		Route::get('storage_information','AdminController@storageInformation');

		Route::post('storage_edit','AdminController@storageEdit');

		Route::post('storage_delete','AdminController@storageDelete');
		// end stogares

		// opoperating_system
		Route::post('opoperating_systems','AdminController@opoperating_system');

		Route::get('opoperating_systems_information','AdminController@opoperating_systemInformation');

		Route::post('opoperating_systems_edit','AdminController@opoperating_systemEdit');

		Route::post('opoperating_systems_delete','AdminController@opoperating_systemDelete');
		// end opoperating_system

		// brand
		Route::post('brand','AdminController@brand');

		Route::get('brand_information','AdminController@brandInformation');

		Route::post('brand_edit','AdminController@brandEdit');

		Route::post('brand_delete','AdminController@brandDelete');
		// end brand

		// product
		Route::post('product','AdminController@product');

		Route::get('product_information','AdminController@productInformation');

		Route::post('product_edit','AdminController@productEdit');

		Route::post('product_delete','AdminController@productDelete');
		// end product
	}
);