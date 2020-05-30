<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ShowController extends Controller
{
    public function main(Request $request)
    {
    	$id = $request->id;
    	$product = Product::find($id); //lay san pham tu id
    	return view('product.show', ['product' => $product]);
    }	
}
