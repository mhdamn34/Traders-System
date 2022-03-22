<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){

        $suppliers=Supplier::all();
        return view('suppliers.listSupplier', compact('suppliers'));
    }


    public function create(){

        

    }

}
