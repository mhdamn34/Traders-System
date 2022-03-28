<?php

namespace App\Http\Controllers;

use App\Models\OrderGrab;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderGrabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_grab = OrderGrab::all();
        return view('Grab.index',compact('order_grab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $order_grab = OrderGrab::all();
        return view('Grab.create', compact('order_grab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request -> validate([
            'rider_id' => 'required', 
            'order_description'=>'required',
            'order_name'=>'required',

        ]);

        $order_grab = new OrderGrab();
        $order_grab -> rider_id = $request -> rider_id;
        $order_grab -> order_name = $request -> order_name;
        $order_grab -> order_description = $request -> order_description;
        $order_grab -> save();

        return redirect()->route('Grab.index')
        ->with('success', 'order booked successfully.' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OrderGrab  $orderGrab
     * @return \Illuminate\Http\Response
     */
    public function show(OrderGrab $orderGrab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderGrab  $orderGrab
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderGrab $orderGrab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderGrab  $orderGrab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderGrab $orderGrab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderGrab  $orderGrab
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderGrab $order_grab)
    {
        //
        $order_grab->delete();
        return redirect()->route('Grab.index');
    }
}
