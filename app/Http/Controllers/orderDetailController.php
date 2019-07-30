<?php

namespace App\Http\Controllers;

use App\order_detail;
use Illuminate\Http\Request;

class orderDetailController extends Controller
{
    public function store($id, Request $request)
    {
        $carts = $request->carts;
        foreach ($carts as $cart_)
        {
            $cart = json_decode($cart_);
            $order_detail = new order_detail();
            $order_detail->id_order = $id;
            $order_detail->id_product = $cart->products->id;
            $order_detail->number = $cart->quantity;
            $order_detail->price = $cart->products->price;
            $order_detail->save();
        }
        return response()->json([
            'status' => '1',
            'message' => 'Save Success'
        ]);
    }
}
