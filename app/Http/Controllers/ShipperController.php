<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    //
    public function index(){

        $shippers=Shipper::all();
        return view('shippers.shippersHome',compact('shippers'));
    }

    public function create(){

        return view('shippers.newShipper');
    }
    
}
