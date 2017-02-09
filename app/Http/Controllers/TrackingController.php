<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class TrackingController extends Controller
{
    /**
     * fetches all the products
     *
     * @return Illuminate\Http\Response
     */
    public function getProducts()
    {
    	$products = Product::all();

    	if ($products) {
    		return response()->json([$products, 200]);
    	}

    	return response()->json(['Products data not found', 404]);
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
    		return response()->json([$product, 201]);
    	}

    	return response()->json(['Not created', 200]);
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
