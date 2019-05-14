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
use App\Fk_color_product;

class AdminController extends Controller
{
	public function __construct()
	{
    	$this->middleware('admin');
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
		$brands = Brand::all();
      foreach ($brands as $value) {
         $value['product'] = $value->product()->get()->count();
         }
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
         foreach ($request->file('imagefile') as $image) {
            $img = new Image();
            $img->product_id = $product->id;
            $img->link = $image->store('public');
            $img->save();
         }

         $fk = new Fk_color_product();
         $fk->color_id = $request->color_id;
         $fk->product_id = $product->id;
         $fk->save();

         return $product;
      }

      public function productInformation()
      {
         return Product::all(); 
      }
      public function productEdit(Request $request)
      {
         $brand = Product::find($request->id);
         if($request->name != '' && trim($request->name) != ''){
            $brand->name = $request->name;
            $brand->save();
            return $size;
         }else {
            return $size;
         }
      }  

      public function productDelete(Request $request)
      {
         $brand = Product::find($request->id);
         $brand->delete();
         return 1;
      }
}
