<?php

namespace App\Http\Controllers;

use App\order;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function store(Request $request)
    {
        $order = new order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->email = $request->email;
        $order->street = $request->address['street'];
        $order->district = $request->address['district'];
        $order->city = $request->address['city'];
        $order->save();
        return response()->json([
            'status' => '1',
            'id_order' => $order->id
        ]);
    }
}
