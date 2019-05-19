<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB,Cart;
use App\Brand;
use App\StorageM;
use App\Order;
use App\Orderdetail;

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
        
        $brands = DB::table('brands')
        ->get();
        
        foreach ($brands as $brand) {
            $product = DB::table('products')
            ->join('images','products.id','=','images.product_id')
            ->select('products.*','images.link')
            ->where('products.brand_id',$brand->id)
            ->orderBy('products.created_at', 'DESC')
            ->offset(0)
            ->limit(5)
            ->get();

            $brand->products = $product;
        }

        $topSell = DB::table('products')
          ->join('images','products.id','=','images.product_id')
          ->select('products.*','images.link')
          ->orderBy('products.sale', 'DESC')
          ->offset(0)
          ->limit(5)
          ->get();

        return view('user/index',compact('new_product','brands','topSell'));
   }

   public function product($id)
   {
      $product = DB::table('products')
      ->join('images','products.id','=','images.product_id')
      ->where('products.id','=',$id)->first();
      $relate_product = DB::table('products')
      ->join('images','products.id','=','images.product_id')
      ->where('products.brand_id','=',$product->brand_id)
      ->offset(0)
      ->limit(4)
      ->get();
      
      return view('user/product',compact('product','relate_product'));
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

   public function storeAll(Request $request) {

    if($request->has('brand')){
      if($request->brand) $brandSelected = $request->brand;
      else{
        $brand = DB::table('brands')
                        ->select('id')
                        ->get();
        $brandSelected = array();
        foreach ($brand as $value) {
          $brandSelected[] = $value->id;             
        } 
      }

    }else{
      $brand = DB::table('brands')
                      ->select('id')
                      ->get();
      $brandSelected = array();
      foreach ($brand as $value) {
        $brandSelected[] = $value->id;             
      }           
      
    }

    if($request->has('storage')){
      if($request->storage) $storageSelected = $request->storage;
      else{
        $storage = DB::table('storages')
                        ->select('id')
                        ->get();
        $storageSelected = array();
        foreach ($storage as $value) {
          $storageSelected[] = $value->id;             
        } 
      }

    }else{
      $storage = DB::table('storages')
                      ->select('id')
                      ->get();
      $storageSelected = array();
      foreach ($storage as $value) {
        $storageSelected[] = $value->id;             
      }           
    }

    if($request->has('operating_system')){
      if($request->operating_system) $operating_systemSelected = $request->operating_system;
      else{
        $operating_system = DB::table('operating_systems')
                        ->select('id')
                        ->get();
        $operating_systemSelected = array();
        foreach ($operating_system as $value) {
          $operating_systemSelected[] = $value->id;             
        } 
      }

    }else{
      $operating_system = DB::table('operating_systems')
                      ->select('id')
                      ->get();
      $operating_systemSelected = array();
      foreach ($operating_system as $value) {
        $operating_systemSelected[] = $value->id;             
      }           
    }

    $search = $request->search;
    if($request->has('pag')){
      if($request->pag) $pag = $request->pag;
      else  $pag = 9;
    }else{
      $pag = 9;
    }
    $product_asType = DB::table('products')
      ->join('images','products.id','=','images.product_id')
      ->whereIn('brand_id',$brandSelected)
      ->whereIn('storage_id',$storageSelected)
      ->whereIn('operating_system_id',$operating_systemSelected)
      ->paginate($pag);
      // $tyPe = DB::table('brands')->where('id','=',$type)->first();
      $topSelling_product = DB::table('products')
        ->join('images','products.id','=','images.product_id')
        ->where('products.sale','=','1')
        ->where('products.name','like','%'.$request->search.'%')
        ->orderBy('products.price','DESC')
        ->offset(0)
        ->limit(5)
        ->get();
    return view('user/store',compact('product_asType','topSelling_product','brandSelected','search','storageSelected','operating_systemSelected'));

   }

   public function addToCart(Request $request){
          // return $request->id;
         $product = DB::table('products')
         ->join('images','products.id','=','images.product_id')
         ->where('products.id','=',$request->id)->first();
         // return json_encode($product);
         Cart::instance('shopping')->add(['id'=>$request->id,
                  'name'=>$product->name,
                  'qty'=>1,
                  'price'=>$product->price,
                  'options'=>
                    ['img'=>$product->link]
                  ]);
        return json_encode( ['cart' => Cart::instance('shopping')->content(),'total' => Cart::instance('shopping')->subtotal(0)]);
        
   }

   public function destroyCart(Request $request){
    Cart::instance('shopping')->remove($request->rowId);
    return json_encode( ['count' => Cart::instance('shopping')->content()->count(),'total' => Cart::instance('shopping')->subtotal(0)]);
   }

   public function getSearch(Request $request){
    // if($request->has('brand'))
      $product = DB::table('products')
      ->join('images','products.id','=','images.product_id')
      ->where('products.name','like','%'.$request->search.'%')
      ->where('products.brand_id','like','%'.$request->brand.'%')
      ->orWhere('products.price',$request->search)
      ->paginate(6);
      
      $type_CheckBox = DB::table('brands')->get();
      $topSelling_product = DB::table('products')
        ->join('images','products.id','=','images.product_id')
        ->where('products.sale','=','1')
        ->orderBy('products.price','DESC')
        ->offset(0)
        ->limit(5)
        ->get();
      return view('user/search',compact('product','type_CheckBox','topSelling_product'));
   }


   public function addOrder(Request $request){
    
    $or = new Order();

    $or->user_id = $request->id;
    $or->name = $request->name;
    $or->address = $request->address;
    $or->phone = $request->phone;
    $or->status = 0;
    $or->amount = Cart::instance('shopping')->subtotal(0,"","");

    $or->save();

    foreach (Cart::instance('shopping')->content() as $value) {
     $o = new Orderdetail();
     $o->order_id = $or->id;
     $o->product_id = $value->id;
     $o->priced = $value->price;
     $o->quantity = $value->qty;
     $o->save();
    }
    Cart::instance('shopping')->destroy();
    return redirect()->back();
   }
}
