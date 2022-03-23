<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers = Customer::whereNull('deleted_at');
        // $customers[0]->user->email;
        return view('customers.index', compact('customers'));
    }

    public function create() {
        return view('customers.create');
    }
    
    public function store(Request $request) {
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->save();

        return redirect()->route('customer.index');
    }

    public function show(Customer $customer) {
        return view('customers.show', compact('customer'));
    }

    public function edit(Customer $customer) {
        return view('customers.show', compact('customer'));
    }

    public function update(Request $request, Customer $customer) {
        $customer->first_name = $request->first_name;
        $customer->save();

        return redirect()->route('customer.show', compact('customer'));
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return redirect()->route('customr.index');
    }
}
