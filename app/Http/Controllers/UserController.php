<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function __construct()
   {
      date_default_timezone_set('Asia/Ho_Chi_Minh');
   }
    //
   public function index()
   {
   		return view('user/index');
   }

   public function product()
   {
   		return view('user/product');
   }

   public function checkout()
   {
   		return view('user/checkout');
   }

   public function store()
   {
   		return view('user/store');
   }
}
