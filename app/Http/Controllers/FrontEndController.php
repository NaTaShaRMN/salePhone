<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //
   public function index()
   {
   		return view('frontend/index');
   }

   public function product()
   {
   		return view('frontend/product');
   }

   public function checkout()
   {
   		return view('frontend/checkout');
   }

   public function store()
   {
   		return view('frontend/store');
   }
}
