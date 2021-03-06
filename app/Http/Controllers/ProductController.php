<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers = Customer::all();
        // dd ($customers);
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('products.create', compact('suppliers'));

    }

    public function store(Request $request)
    {
        $request->validate([

            'product_name' => 'required',
            'product_code' => 'required',
            'category' => 'required',
            'supplier_id' => 'required',
            'quantity_per_unit' => 'required',
            'description' => 'required',
            'standard_cost' => 'required',
            'list_price' => 'required',
            'reorder_level' => 'required',
            'target_level' => 'required',
            'default_reorder' => 'required',
            // 'discontinued' => 'required',

        ]);

        $product = new Product();
        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->description = $request->description; 
        $product->supplier_id = $request->supplier_id;       
        $product->standard_cost = $request->standard_cost;
        $product->list_price = $request->list_price;
        $product->reorder_level = $request->reorder_level;
        $product->target_level = $request->target_level;
        $product->quantity_per_unit = $request->quantity_per_unit;
        $product->discontinued = $request->discontinued;
        $product->category = $request->category;
        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
       
        $product->product_name = $request->product_name;
        $product->product_code = $request->product_code;
        $product->description = $request->description;       
        $product->standard_cost = $request->standard_cost;
        $product->list_price = $request->list_price;
        $product->reorder_level = $request->reorder_level;
        $product->target_level = $request->target_level;
        $product->quantity_per_unit = $request->quantity_per_unit;
        $product->discontinued = $request->discontinued;
        $product->category = $request->category;
        $product->save();

        return redirect()->route('product.index', compact('product'))
        ->with('success', 'Product update successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Product $product)

    {
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Product deleted successfully');
    }
}
