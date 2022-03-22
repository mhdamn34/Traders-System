<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //

    public function index(){

        $orders=Order::all();
        return view('Orders.orderhome',compact('orders'));

        // $orders=Order::all();
        // return view('Orders.addNewOrder', compact('orders'));

    }
    public function dropDownShow(Request $request)
    {
        // $items = 
    }
}


