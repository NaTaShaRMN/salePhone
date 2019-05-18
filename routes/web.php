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

Route::get('/store/{type}', 'UserController@store');

<<<<<<< HEAD
Route::get('/product/{id}', 'UserController@product')->name('product');
=======
Route::get('/store', 'UserController@storeAll');

Route::get('/product/{id}', 'UserController@product');
>>>>>>> 3ed4d603476fd4f163c08659a0253a2d7a3bc62f

Route::get('/checkout', 'UserController@checkout');

Route::get('/login','AccountController@getLogin');

Route::post('/login','AccountController@postLogin')->name('login');

Route::get('/register', 'AccountController@getRegister');

Route::post('/register', 'AccountController@postRegister')->name('register');

Route::get('/forget_password','AccountController@getForgetPassword');

Route::post('/forget_password','AccountController@postForgetPassword')->name('forget');

Route::post('/password_reset','AccountController@postReset')->name('reset');

Route::get('confirm', function(){
	return view('confirm_email');
});

Route::get('confirmuser/{code}', 'AccountController@confirmUser');

Route::get('/logout',function(){
	Auth::logout();
	return redirect('/');
});
Route::get('/search', [
	'uses' =>'UserController@getSearch',
	'as' => 'search'
	]);
Route::get('/comment/{id}', 'UserController@addComment')->name('comment');
// them vao gio hang
// Route::get('cart/add-to-card/{id}','UserController@addToCart')->name('addtocard');
// Route::get('cart/update-cart/{id}', 'UserController@updateCart')->name('updatecart');
// Route::get('cart/remove/{id}', 'UserController@removeCart')->name('removecart');
// Route::get('cart/delete', 'UserController@destroyCart')->name('destroycart');

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

		Route::get('/images',function(){
			return view('admin.images');
		});

		Route::get('/exs',function(){
			return view('admin.exs');
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

		// order
		Route::post('order','AdminController@order');

		Route::get('order_information','AdminController@orderInformation');

		Route::post('order_edit','AdminController@orderEdit');

		Route::post('order_delete','AdminController@orderDelete');
		// end order

		// orderdetail
		Route::post('orderdetail','AdminController@orderdetail');

		Route::get('orderdetail_information','AdminController@orderdetailInformation');

		Route::post('orderdetail_edit','AdminController@orderdetailEdit');

		Route::post('orderdetail_delete','AdminController@orderdetailDelete');
		// end orderdetail

		// user
		Route::post('user','AdminController@user');

		Route::get('user_information','AdminController@userInformation');

		Route::post('user_edit','AdminController@userEdit');

		Route::post('user_delete','AdminController@userDelete');
		// user

		// comment
		// Route::post('comment','AdminController@comment');

		Route::get('comment_information','AdminController@commentInformation');

		// Route::post('comment_edit','AdminController@commentEdit');

		Route::post('comment_delete','AdminController@commentDelete');
		// comment


		// image
		// Route::post('user','AdminController@user');

		Route::get('image_information','AdminController@imageInformation');

		Route::post('user_edit','AdminController@userEdit');

		Route::post('user_delete','AdminController@userDelete');
		// image

		// mở rộng
		Route::post('ex','AdminController@ex');

		Route::get('ex_information','AdminController@exInformation');

		Route::post('ex_edit','AdminController@exEdit');

		Route::post('ex_delete','AdminController@exDelete');
		// end mở rộng


	}
	
	
);