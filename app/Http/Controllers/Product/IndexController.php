<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class IndexController extends Controller
{
    public function main(Request $request)
    {
    	$products = Product::all();
    	return view('product.index', ['products' => $products]);
    }
}
