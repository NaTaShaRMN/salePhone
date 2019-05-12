<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class AccountController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginView()
    {
    	return view('login');
    }

    public function postLogin(Request $request){
    	// $rules = [
    	// 	'email' => 'required|min:6',
    	// 	'password' => 'required|min:6'
    	// ];

    	// $messages = [
    	// 	'email.required'  => 'Email không được để trống',
    	// 	'email.min'		 => 'Email chứa ít nhất 6 ký tự', 
    	// 	'password.required' => 'Mật khẩu không được để trống',
    	// 	'password.min'		=> 'Mật khẩu phải chứa ít nhất 6 ký tự'
    	// ];

    	// $validator = Validator::make($request->all(), $rules, $messages);

    	// if($validator->fails()){
    	// 	return redirect()->back()->withErrors($validator);
    	// }
    	$email = $request->input('email');
    	$password = $request->input('password');


    	if(Auth::attempt(['email'=>$email,'password'=>$password,'level'=>2])){
    		return redirect('/admin');
    	}else if(Auth::attempt(['email'=>$email,'password'=>$password,'level'=>1])){
    		return redirect('/');
    	}else{
    		$errors = new MessageBag(['errorLogin' => 'Tên đăng nhập hoặc mật khẩu không chính xác']);
    		return redirect()->back()->withErrors($errors);
    	}


    }
}
