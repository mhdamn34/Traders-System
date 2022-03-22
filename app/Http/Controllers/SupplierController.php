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

        return view('purchaseOrders.createPurchase');

    }

    public function store(Request $request){

        $request->validate([
            'company' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'jobTitle' => 'required',
            'businessPhone' => 'required',

        ]);
        $supplier=new Supplier();
        $supplier->Company=$request->company;
        $supplier->FirstName=$request->firstName;
        $supplier->LastName=$request->lastName;
        $supplier->JobTitle=$request->jobTitle;
        $supplier->BusinessPhone=$request->businessPhone;
        $supplier->save();


        return redirect()->route('suppliers.index')
        ->with('success', 'Supplier created successfully.');

    }

}
