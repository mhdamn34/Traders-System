<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){

        $suppliers=Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }


    public function create(){

        return view('suppliers.create');

    }

    public function store(Request $request){

        $request->validate([
            'company' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'job_title' => 'required',
            'business_phone' => 'required',
            'mobile_phone' => 'required',

        ]);

        $supplier=new Supplier();
        $supplier->company = $request->company;
        $supplier->first_name = $request->first_name;
        $supplier->last_name = $request->last_name;       
        $supplier->email_address = $request->email_address;
        $supplier->job_title = $request->job_title;
        $supplier->business_phone = $request->business_phone;
        $supplier->home_phone = $request->home_phone;
        $supplier->mobile_phone = $request->mobile_phone;
        $supplier->fax_number = $request->fax_number;
        $supplier->address = $request->address;
        $supplier->city = $request->city;
        $supplier->state = $request->state;
        $supplier->postal_code = $request->postal_code;
        $supplier->country = $request->country;
        $supplier->web_page = $request->web_page;
        $supplier->notes = $request->notes;
        $supplier->save();


        return redirect()->route('supplier.index')
        ->with('success', 'Supplier created successfully.');

    }

    public function show(){

    }

    public function update(){

    }

    public function destroy(){

    }

}
