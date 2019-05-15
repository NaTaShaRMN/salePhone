<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Confirm;
use Mail;
use App\Mail\ConfirmUser;
use App\Mail\RegisteredUser;

class AccountController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin()
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

    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
        $rules = [
            'name'          => 'required|min:1',
            'password'      => 'required|min:6',
            're_password'   => 'required|min:6',
            'phone'         => 'required|regex:/(0)[0-9]{9}/',
            'email'         => 'required|email'
        ];
        $messages = [
            'email.required'    => 'Email không được để trống',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min'      => 'Mật khẩu phải chứa ít nhất 6 ký tự',
            'name.required'     => 'Không được để trống',
            're_password.required'      => 'Không được để trống',
            'phone.required'        => 'Không được để trống',
            'phone.regex' => 'Số chứng minh thư à?',
            'name.min'              => 'Tên chứa ít nhất 3 ký tự'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else{
            $email = $request->input('email');
            $password = $request->input('password');
            $user= User::where('email','=',$email)->get();
            if(count($user)) {
                $errors = new MessageBag(['errorComfirmEmail' => 'Email đã được sử dụng']);
                return redirect('/register')->withInput()->withErrors($errors);
            }
            if($request->password != $request->re_password){
                $err = new MessageBag(['errorPassword' => 'Mật khẩu không khớp']);
                return redirect('/register')->withInput()->withErrors($err);
            }
            $user = new User();
            $user->name = $request->name;
            $user->email=$request->email;
            $user->password= Hash::make($request->password);
            $user->phone= $request->phone;
            $user->level= 0;

            $user->save();

            $code = new Confirm();
            $code->user_id= $user->id;
            $code_confirm= str_random(50);
            $code->code= $code_confirm;
            $code->status=0;
            $code->save();

            Mail::to($request->email)->send(new ConfirmUser($code_confirm, $user->name));
            
            return redirect('/confirm');
        }
        return redirect('/');
    }

}
