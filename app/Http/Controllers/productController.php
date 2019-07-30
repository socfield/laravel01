<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->availableAmount = $request->availableAmount;
        $product->save();
        return response()->json([
            'status' => '1',
            'message' => 'Successfully added'
        ]);
    }
    public function getProduct()
    {
        $product = product::all();
        return response()->json([
            'products' => $product,
            'message' => 'Successfully get product'
        ]);
    }
}
