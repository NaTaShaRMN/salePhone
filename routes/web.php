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

		Route::get('information/storage',function(){
			return view('admin.storage');
		});

		Route::get('information/operating_system',function(){
			return view('admin.opoperating_system');
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

	}
);