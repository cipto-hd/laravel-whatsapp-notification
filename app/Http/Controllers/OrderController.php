<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderProcessed;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = factory(\App\Order::class)->create();


        $request->user()->notify(new OrderProcessed($order));

        return redirect()->route('home')->with('status', 'Order Placed!');
    }
}
