<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class StoreController extends Controller
{
    public function main(Request $request)
    {
    	$this->validation($request);
    	$params = $request->only(['name', 'description']);
    	$product = new Product;
    	$product->name = $params['name'];
    	$product->description = $params['description'];
    	$product->save();
    	return redirect()->route('product.index');
    }

   	private function validation(Request $request)
   	{
   		return $request->validate([
   			'name' => 'required',
   			'description' => 'required'
   		]);
   	}
}
