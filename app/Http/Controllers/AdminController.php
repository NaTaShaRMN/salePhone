<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Color;
use App\Display;
use App\StorageM;
use App\Operating_System;
use App\Brand;
use App\Product;
use App\Image;
use App\Order;
use App\User;
use App\Orderdetail;
use App\Fk_color_product;
use App\Comment;
use App\Ex;


class AdminController extends Controller
{
	public function __construct()
	{
    	$this->middleware('admin');
      date_default_timezone_set('Asia/Ho_Chi_Minh');
	}
    //
   	public function color(Request $request)
   	{
   		$color = new Color();
   		if($request->color != '' && trim($request->color) != ''){
   			$color->color = $request->color;
   			$color->save();
   			return $color;
   		}else {
   			return null;
   		}
  	}

   	public function colorInformation()
   	{
		return Color::all();
   	}

   	public function colorEdit(Request $request)
   	{
   		$color = Color::find($request->id);
   		if($request->color != '' && trim($request->color) != ''){
   			$color->color = $request->color;
   			$color->save();
   			return $color;
   		}else {
   			return $color;
   		}
   	}

   	public function colorDelete(Request $request)
   	{
   		$color = Color::find($request->id);
   		$color->delete();
   		return 1;
   	}

   	// end color

   	public function display(Request $request)
   	{
   		$display = new Display();
   		if($request->size != '' && trim($request->size) != ''){
   			$display->size = $request->size;
   			$display->save();
   			return $display;
   		}else {
   			return null;
   		}
  	}

   	public function displayInformation()
   	{
		return Display::all();
   	}

   	public function displayEdit(Request $request)
   	{
   		$display = Display::find($request->id);
   		if($request->size != '' && trim($request->size) != ''){
   			$display->size = $request->size;
   			$display->save();
   			return $size;
   		}else {
   			return $size;
   		}
   	}	

   	public function displayDelete(Request $request)
   	{
   		$display = Display::find($request->id);
   		$display->delete();
   		return 1;
   	}

   	// end display

   	public function storage(Request $request)
   	{
   		$storage = new StorageM();
   		if($request->size != '' && trim($request->size) != ''){
   			$storage->size = $request->size;
   			$storage->save();
   			return $storage;
   		}else {
   			return null;
   		}
  	}

   	public function storageInformation()
   	{
		return StorageM::all();
   	}

   	public function storageEdit(Request $request)
   	{
   		$storage = StorageM::find($request->id);
   		if($request->size != '' && trim($request->size) != ''){
   			$storage->size = $request->size;
   			$storage->save();
   			return $size;
   		}else {
   			return $size;
   		}
   	}	

   	public function storageDelete(Request $request)
   	{
   		$storage = StorageM::find($request->id);
   		$storage->delete();
   		return 1;
   	}

   	// end storage
   	

   	public function opoperating_system(Request $request)
   	{
   		$op = new Operating_System();
   		if($request->name != '' && trim($request->name) != ''){
   			$op->name = $request->name;
   			$op->save();
   			return $op;
   		}else {
   			return null;
   		}
  	}

   	public function opoperating_systemInformation()
   	{
		return Operating_System::all();
   	}

   	public function opoperating_systemEdit(Request $request)
   	{
   		$op = Operating_System::find($request->id);
   		if($request->name != '' && trim($request->name) != ''){
   			$op->name = $request->name;
   			$op->save();
   			return $size;
   		}else {
   			return $size;
   		}
   	}	

   	public function opoperating_systemDelete(Request $request)
   	{
   		$op = Operating_System::find($request->id);
   		$op->delete();
   		return 1;
   	}

   	// end op 

      //brand
   	public function brand(Request $request)
   	{
   		$brand = new Brand();
   		if($request->name != '' && trim($request->name) != ''){
   			$brand->name = $request->name;
   			$brand->save();
   			return $brand;
   		}else {
   			return null;
   		}
   	}

   	public function brandInformation()
   	{
		// $products =  DB::table('products');
		// return Brand::find(1)->product()->get();
<<<<<<< Updated upstream
      $brands = Brand::all();
      // ->join('products','brands.id','=','products.brand_id')
      // ->select('brands.*',DB::raw('sum(products.quantity) as quantitys'))
      // ->groupBy('brands.name')
      // ->get();
=======
		$brands = Brand::all();
>>>>>>> Stashed changes
	      // foreach ($brands as $value) {
	      //    $value['product'] = $value->product()->get()->count();
	      //    }
      return $brands;
   	}

   	public function brandEdit(Request $request)
   	{
   		$brand = Brand::find($request->id);
   		if($request->name != '' && trim($request->name) != ''){
   			$brand->name = $request->name;
   			$brand->save();
   			return $size;
   		}else {
   			return $size;
   		}
   	}	

   	public function brandDelete(Request $request)
   	{
   		$brand = Brand::find($request->id);
   		$brand->delete();
   		return 1;
   	}

      //product

      public function product(Request $request)
      {
         $product = new Product();  

         $product->name = $request->name;
         $product->price = $request->price;
         $product->sale = $request->sale;
         $product->brand_id = $request->brand_id;
         $product->display_id = $request->display_id;
         $product->storage_id = $request->storage_id;
         $product->operating_system_id = $request->op_id;
         $product->description = $request->description;
         $product->quantity = $request->quantity;

         $product->save();
         if($request->file('imagefile')!== null){
            foreach ($request->file('imagefile') as $image) {
               $img = new Image();
               $img->product_id = $product->id;
               $img->link = $image->store('public');
               $img->link = str_replace('public/','',$img->link);
               $img->save();
            }
         }
         $colors = explode(',' , $request->colors);
         foreach ($colors as $id) {
            $fk = new Fk_color_product();
            $fk->color_id = $id;
            $fk->product_id = $product->id;
            $fk->save();   
         }

         $product->brand = DB::table('brands')
                        // ->select('brands.name')
                        ->where('id',$product->brand_id)
                        ->get(); 
         $product->brand = $product->brand[0]->name;
         $product->display = DB::table('displays')
                           // ->select('displays.size')
                           ->where('id',$product->display_id)
                           ->get(); 
         $product->display = $product->display[0]->size;
         $product->storage = DB::table('storages')
                           // ->select('storages.size')
                           ->where('id',$product->storage_id)
                           ->get();
         $product->storage = $product->storage[0]->size;

         $product->operating_system = DB::table('operating_systems')
                        // ->select('operating_systems.name')
                        ->where('id',$product->operating_system_id)
                        ->get(); 

         $product->operating_system = $product->operating_system[0]->name;
         $imgs = array();
         $link = DB::table('products')
               // ->select('images.link')
               ->join('images', 'products.id', '=', 'images.product_id')
               ->where('products.id',$product->id)
               ->get();
         $product->links = $link;

         $cl = DB::table('products')
               // ->select('colors.color')
               ->join('fk_colors_products', 'products.id', '=', 'fk_colors_products.product_id')
               ->join('colors', 'colors.id', '=', 'fk_colors_products.color_id')
               ->where('products.id',$product->id)
               ->get();
         $product->colors = $cl;


         return $product;
      }

      public function productInformation()
      {
         // return Product::all(); 
         $product = Product::all();
         foreach ($product as $value) {
               $value->brand = DB::table('brands')
                              // ->select('brands.name')
                              ->where('id',$value->brand_id)
                              ->get(); 
               $value->brand = $value->brand[0]->name;
               $value->display = DB::table('displays')
                                 // ->select('displays.size')
                                 ->where('id',$value->display_id)
                                 ->get(); 
               $value->display = $value->display[0]->size;
               $value->storage = DB::table('storages')
                                 // ->select('storages.size')
                                 ->where('id',$value->storage_id)
                                 ->get();
               $value->storage = $value->storage[0]->size;

               $value->operating_system = DB::table('operating_systems')
                              // ->select('operating_systems.name')
                              ->where('id',$value->operating_system_id)
                              ->get(); 

               $value->operating_system = $value->operating_system[0]->name;
               $imgs = array();
               $link = DB::table('products')
                     // ->select('images.link')
                     ->join('images', 'products.id', '=', 'images.product_id')
                     ->where('products.id',$value->id)
                     ->get();
               $value->links = $link;

               $cl = DB::table('products')
                     // ->select('colors.color')
                     ->join('fk_colors_products', 'products.id', '=', 'fk_colors_products.product_id')
                     ->join('colors', 'colors.id', '=', 'fk_colors_products.color_id')
                     ->where('products.id',$value->id)
                     ->get();
               $value->colors = $cl;
            }
         return $product;
      }
      public function productEdit(Request $request)
      {
         $product = Product::find($request->id);
         if(isset($request->brand_id)){
            $product->brand_id = $request->brand_id;
         }
         if(isset($request->display_id)){
            $product->display_id = $request->display_id;
         }
         if(isset($request->storage_id)){
            $product->storage_id = $request->storage_id;
         }
         if(isset($request->op_id)){
            $product->operating_system_id = $request->op_id;
         }
         if($request->file('imagefile')!== null){
            $deleteImg =  DB::table('images')
                        // ->select('colors.color')
                        ->where('images.product_id',$request->id)
                        ->get();
            foreach ($deleteImg as $value) {
               Storage::delete('public/'.$value->link);
               Image::find($value->id)->delete();
            }

            foreach ($request->file('imagefile') as $image) {
               $img = new Image();
               $img->product_id = $product->id;
               $img->link = $image->store('public');
               $img->link = str_replace('public/','',$img->link);
               $img->save();
            }
         }

         if($request->colors !== null){
            $delete =  DB::table('fk_colors_products')
                     // ->select('colors.color')
                     ->where('fk_colors_products.product_id',$product->id)
                     ->get();
            foreach ($delete as $value) {
               Fk_color_product::find($value->id)->delete();
            }
            $colors = explode(',' , $request->colors);
            foreach ($colors as $id) {
               $fk = new Fk_color_product();
               $fk->color_id = $id;
               $fk->product_id = $product->id;
               $fk->save();   
            }
         }
         $product->name = $request->name;
         $product->price = $request->price;
         $product->sale = $request->sale;
         $product->description = $request->description;
         $product->quantity = $request->quantity;
         $product->save();
         $cl = DB::table('products')
                     // ->select('colors.color')
               ->join('fk_colors_products', 'products.id', '=', 'fk_colors_products.product_id')
               ->join('colors', 'colors.id', '=', 'fk_colors_products.color_id')
               ->where('products.id',$product->id)
               ->get();
         $product->colors = $cl;

         $link = DB::table('products')
               // ->select('images.link')
               ->join('images', 'products.id', '=', 'images.product_id')
               ->where('products.id',$product->id)
               ->get();
         $product->links = $link;

         return $product;
      }  

      public function productDelete(Request $request)
      {
         $delete =  DB::table('fk_colors_products')
                     // ->select('colors.color')
                     ->where('fk_colors_products.product_id',$request->id)
                     ->get();
         foreach ($delete as $value) {
            Fk_color_product::find($value->id)->delete();
         }

         $deleteImg =  DB::table('images')
                     // ->select('colors.color')
                     ->where('images.product_id',$request->id)
                     ->get();
         foreach ($deleteImg as $value) {
            Storage::delete('public/'.$value->link);
            Image::find($value->id)->delete();
         }

         $product = Product::find($request->id);
         $product->delete();
         return 1;

      }

      //end product

      public function orderInformation(){
         $orders = Order::all();
         foreach ($orders as $value) {
            $value->user_name = User::find($value->user_id)->username;
         }
         return $orders;
      }

      //emd order

      public function orderdetailInformation(){
         $orderdetails = Orderdetail::all();
         foreach ($orderdetails as $value) {
            $value->product_name = Product::find($value->id)->name;
         }
         return $orderdetails;
      }

      // end orderdetails

      public function userInformation(){
         return User::all();
      }

      public function userEdit(Request $request){
         $user = User::find($request->id);
         if(isset($request->level)){
            $user->level = $request->level;
         }
         $user->save();
         return $user->level;
      }
      //comment
      public function commentInformation(){
         return Comment::all();
      }

      public function commentDelete(Request $request){
         Comment::find($request->id)->delete();
         return 1;
      }

      //comment

      //ex
      public function ex(Request $request)
      {
         $ex = new Ex();
         $ex->text = $request->text;
         $ex->link = $request->link;
         $ex->type = $request->type;
         if($request->file('imagefile')!== null){
               $ex->image = $request->file('imagefile')->store('public');
               $ex->image = str_replace('public/','',$ex->image);
         }

         $ex->save();
         return $ex;
      }

      public function exInformation()
      {
         $ex = Ex::all();
         return $ex;
      }

      public function exEdit(Request $request)
      {
         $ex = Ex::find($request->id);
         // return $ex;
         $ex->text = $request->text;
         $ex->link = $request->link;
         $ex->type = $request->type;
         if($request->file('imagefile')!== null){
               Storage::delete('public/'.$ex->image);
               $ex->image = $request->file('imagefile')->store('public');
               $ex->image = str_replace('public/','',$ex->image);
         }
         $ex->save();
         return $ex;
      }  

      public function exDelete(Request $request)
      {
         $ex = Ex::find($request->id);
         Storage::delete('public/'.$ex->image);
         $ex->delete();
         return 1;
      }
}
