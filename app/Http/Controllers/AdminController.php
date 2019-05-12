<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Color;

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
}
