<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
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
     *
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

    /**
     * find a particular product and return it
     *
     * @param  string $productId
     *
     * @return Illuminate\Http\Response
     */
    public function findProduct($productId)
    {
    	$product = Product::whereId($productId)->first();

    	if ($product) {
    		return response()->json([$product, 200]);
    	}

    	return response()->json(['Product not found', 404]);
    }

    /**
     * fetch all products caategories
     *
     * @return Illuminate\Http\Response
     */
    public function getCategories()
    {
    	$categories = ProductCategory::all();

    	if ($categories) {
    		return response()->json([$categories, 200]);
    	}

    	return response()->json(['Categories data not found', 404]);
    }

    /**
     * create a new product category
     */
    public function addCategory(Request $request)
    {
    	$category = ProductCategory::create([
			'name' => $request->description,
		]);

		if ($category) {
			return response()->json([$category, 200]);
		}

		return response()->json(['Not created', 200]);
    }
}
