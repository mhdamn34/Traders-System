<?php

namespace App\Http\Controllers;

use App\Models\Purchase_Order;
use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function index(){
        $purchaseOrders = Purchase_Order::all();
        return view('purchaseOrders.index', compact('purchaseOrders'));
    }

    public function create() {
        return view('purchaseOrders.create');
    }
    
    public function store(Request $request) {

        $request->validate([
            'supplier_id' => 'required',
        ]);

        $purchaseOrders = new Purchase_Order();
       
        $purchaseOrders->created_by = $request->created_by;
        $purchaseOrders->submitted_date = $request->submitted_date;
        $purchaseOrders->creation_date = $request->creation_date;
        $purchaseOrders->expected_date = $request->expected_date;
        $purchaseOrders->approved_date = $request->approved_date;
        $purchaseOrders->payment_date = $request->payment_date;

        $purchaseOrders->taxes = $request->taxes;
        $purchaseOrders->shipping_fee = $request->shipping_fee;
        $purchaseOrders->payment_amount = $request->payment_amount;
        $purchaseOrders->payment_method = $request->payment_method;
        $purchaseOrders->notes = $request->notes;
        
        $purchaseOrders->save();

        return redirect()->route('purchaseOrders.index')
        ->with('success', 'purchase created successfully.');
    }

    public function show(Purchase_Order $purchaseOrders) {
        return view('purchaseOrders.show', compact('purchaseOrders'));
    }

    public function edit(Purchase_Order $purchaseOrders) {
        return view('purchaseOrderss.edit', compact('purchaseOrders'));
    }

    public function update(Request $request, Purchase_Order $purchaseOrders) {

        $purchaseOrders->company = $request->company;
        $purchaseOrders->first_name = $request->first_name;
        $purchaseOrders->last_name = $request->last_name;       
        $purchaseOrders->email_address = $request->email_address;
        $purchaseOrders->job_title = $request->job_title;
        $purchaseOrders->business_phone = $request->business_phone;
        $purchaseOrders->home_phone = $request->home_phone;
        $purchaseOrders->mobile_phone = $request->mobile_phone;
        $purchaseOrders->fax_number = $request->fax_number;
        $purchaseOrders->address = $request->address;
        $purchaseOrders->city = $request->city;
        $purchaseOrders->state = $request->state;
        $purchaseOrders->postal_code = $request->postal_code;
        $purchaseOrders->country = $request->country;
        $purchaseOrders->web_page = $request->web_page;
        $purchaseOrders->notes = $request->notes;
        $purchaseOrders->save();

        return redirect()->route('purchaseOrders.index', compact('purchaseOrders'))
        ->with('success', 'purchaseOrders update successfully');
    }

    public function destroy(Purchase_Order $purchaseOrders) {
        $purchaseOrders->delete();
        return redirect()->route('purchaseOrders.index');
    }

}
