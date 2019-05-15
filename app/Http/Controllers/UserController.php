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
        
        $topSelling_bottom_iPhone = DB::table('products')
        ->join('brands','products.brand_id','=','brands.id')
        ->join('images','products.id','=','images.product_id')
        ->where('brands.id','=','2')
        ->offset(0)
        ->limit(3)
        ->get();
        
        $topSelling_bottom_Samsung = DB::table('products')
        ->join('brands','products.brand_id','=','brands.id')
        ->join('images','products.id','=','images.product_id')
        ->where('brands.id','=','3')
        ->offset(0)
        ->limit(3)
        ->get();
        //print_r($brands);
        
        $topSelling_bottom_Oppo = DB::table('products')
        ->join('brands','products.brand_id','=','brands.id')
        ->join('images','products.id','=','images.product_id')
        ->where('brands.id','=','8')
        ->offset(0)
        ->limit(3)
        ->get();
        return view('user/index',compact('new_product','topSelling_product','brands',
         'topSelling_bottom_iPhone','topSelling_bottom_Samsung','topSelling_bottom_Oppo'));
   }

   public function product($id)
   {
      $product = DB::table('products')
      ->join('images','products.id','=','images.product_id')
      ->where('products.id','=',$id)->first();
      $brand = DB::table('brands')
      ->where('id','=',$product->brand_id)->first();
      $relate_product = DB::table('products')
      ->join('images','products.id','=','images.product_id')
      ->where('products.brand_id','=',$product->brand_id)
      ->offset(0)
      ->limit(4)
      ->get();
      
      return view('user/product',compact('product','relate_product','brand'));
   }

   public function checkout()
   {
   		return view('user/checkout');
   }

   public function store($type)
   {
      $product_asType = DB::table('products')
      ->join('images','products.id','=','images.product_id')
      ->where('products.brand_id','=',$type)
      ->paginate(9);
      $tyPe = DB::table('brands')->where('id','=',$type)->first();
      $type_CheckBox = DB::table('brands')->get();
      $topSelling_product = DB::table('products')
        ->join('images','products.id','=','images.product_id')
        ->where('products.sale','=','1')
        ->orderBy('products.price','DESC')
        ->offset(0)
        ->limit(5)
        ->get();
      return view('user/store',compact('product_asType','tyPe','type_CheckBox','topSelling_product'));
   }
}
