<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function getProducts()
    {

    }

    /**
     * add a new product to the database
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\Response
     */
    public function addProduct(Request $request)
    {
    	$product = Product::create([
    		'category_id' => $request->category_id,
    		'name'	=> $request->name,
    		'description'	=> $request->description,
    		'price' => $request->price,
    		'quantity' => $request->quantity,
    	]);

    	if ($product) {
    		return response()->json([$product, 200]);
    	}

    	return response()->json(['Error', 200]);
    }

    public function findProduct()
    {

    }

    public function getCategories()
    {

    }

    public function addCategory()
    {

    }
}
