<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderStatus;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    //

    public function index(){

        // $orders=Order::join('orderstatus','orders.StatusID','orderstatus.StatusID')->get();

        return view('Orders.orderhome');

        // $orders=Order::all();
        // return view('Orders.addNewOrder', compact('orders'));

    }
    public function dropDownShow(Request $request)
    {
        // $items = 
        // if ($this->order_id !=''){
        //     $this->orders = Order::where('order_id', $this->order_id)->get();
        // }
        

    }
    public function dropdown(){

        return $this->belongsTo(Customers::class, 'id', 'id');
     }

}


