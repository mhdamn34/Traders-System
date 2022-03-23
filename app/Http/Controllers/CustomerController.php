<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        // $customers = Customer::whereNull('deleted_at');
        $customers = Customer::all();
        // $customers[0]->user->email;
        return view('customers.index', compact('customers'));
    }

    public function create() {
        return view('customers.create');
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

        ]);

        $customer = new Customer();
        $customer->company = $request->company;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;       
        $customer->email_address = $request->email_address;
        $customer->job_title = $request->job_title;
        $customer->business_phone = $request->business_phone;
        $customer->home_phone = $request->home_phone;
        $customer->mobile_phone = $request->mobile_phone;
        $customer->fax_number = $request->fax_number;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->postal_code = $request->postal_code;
        $customer->country = $request->country;
        $customer->web_page = $request->web_page;
        $customer->notes = $request->notes;
        $customer->save();

        return redirect()->route('customer.index')
        ->with('success', 'Supplier created successfully.');;
    }

    public function show(Customer $customer) {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer) {
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, Customer $customer) {

        $customer->company = $request->company;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;       
        $customer->email_address = $request->email_address;
        $customer->job_title = $request->job_title;
        $customer->business_phone = $request->business_phone;
        $customer->home_phone = $request->home_phone;
        $customer->mobile_phone = $request->mobile_phone;
        $customer->fax_number = $request->fax_number;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->state = $request->state;
        $customer->postal_code = $request->postal_code;
        $customer->country = $request->country;
        $customer->web_page = $request->web_page;
        $customer->notes = $request->notes;
        $customer->save();

        return redirect()->route('customer.index', compact('customer'));
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
