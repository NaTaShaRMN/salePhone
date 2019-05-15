<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
   public function __construct()
   {
      date_default_timezone_set('Asia/Ho_Chi_Minh');
   }
    //
   public function index()
   {
        $new_product = DB::table('products')
        ->join('images','products.id','=','images.product_id')
        ->select('products.*','images.link')
        ->orderBy('products.created_at', 'DESC')
        ->offset(0)
        ->limit(5)
        ->get();
        //print_r($new_product);
        $topSelling_product = DB::table('products')
        ->join('images','products.id','=','images.product_id')
        ->where('products.sale','=','1')
        ->orderBy('products.price','DESC')
        ->offset(0)
        ->limit(5)
        ->get();
        //print_r($topSelling_product);
        $brands = DB::table('brands')
        ->get();
        //print_r($brands);

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
