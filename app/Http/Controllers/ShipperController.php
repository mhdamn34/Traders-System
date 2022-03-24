<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Shipper;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    //
    public function index()
    {
        $shippers=Shipper::all();
        return view('shippers.shippersHome',compact('shippers'));
    }

    public function create()
    {
        return view('shippers.newShipper');    
    }

    public function store(Request $request) {

        $request->validate([
            'company' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'job_title' => 'required',
            'business_phone' => 'required',
            'mobile_phone' => 'required',
            'fax_number' => 'required',
            'address' => 'required',
            'street' => 'required',
            'city' => 'required',
            'postal_code' => 'required',
            'country' => 'required',
            'web_page' => 'required',
            'notes' => 'required',

        ]);

        $shipper = new Shipper();
        $shipper->company = $request->company;
        $shipper->first_name = $request->first_name;
        $shipper->last_name = $request->last_name;
        $shipper->email_address = $request->email_address;
        $shipper->job_title = $request->job_title;
        $shipper->business_phone = $request->business_phone;
        $shipper->mobile_phone = $request->mobile_phone;
        $shipper->fax_number = $request->fax_number;
        $shipper->address = $request->address;
        $shipper->city = $request->city;
        $shipper->state = $request->state;
        $shipper->postal_code = $request->postal_code;
        $shipper->country = $request->country;
        $shipper->web_page = $request->web_page;
        $shipper->notes = $request->notes;

        $shipper->save();

        return redirect()->route('shipper.index')
        -> with('Success','Shipper Added Successfully');
    }

    public function show(Shipper $shipper) {
        return view('shippers.show', compact('shipper'));
    }

    public function edit(Shipper $shipper) {
        return view('shippers.edit', compact('shipper'));
    }

    public function update(Request $request, Shipper $shipper) {

        $shipper->company = $request->company;
        $shipper->first_name = $request->first_name;
        $shipper->last_name = $request->last_name;       
        $shipper->email_address = $request->email_address;
        $shipper->job_title = $request->job_title;
        $shipper->business_phone = $request->business_phone;
        $shipper->mobile_phone = $request->mobile_phone;
        $shipper->fax_number = $request->fax_number;
        $shipper->address = $request->address;
        $shipper->city = $request->city;
        $shipper->state = $request->state;
        $shipper->postal_code = $request->postal_code;
        $shipper->country = $request->country;
        $shipper->web_page = $request->web_page;
        $shipper->notes = $request->notes;
        $shipper->save();

        return redirect()->route('shipper.index', compact('shipper'))
        ->with('success', 'Shipper update successfully');
    }

    public function destroy(Shipper $shipper) {
        $shipper->delete();
        return redirect()->route('shipper.index');
    }


   
}
