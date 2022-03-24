@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Inventory List</h3>
    </div>

    <div class="row" allign="left">
    <div class="pull-right">
        <a href="{{url('/addproduct')}}">Add Product</a>
    </div>

    <div class="row" allign="right">
    <div class="pull-right">
        <a href="">Home</a>
    </div>


    </div>

</div>



    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Total Inventory</th>
                    <th>Allocated Inventory</th>
                    <th>Available Inventory</th>
                    <th>Inventory Due From Supplier</th>
                    <th>Combined Total</th>
                    <th>Target Level</th>
                    <th>Qty To Reorder</th>
                    <th>Purchase from Supplier
                    </th>
                </tr>
            </thead>

            <tbody>
            <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>
                    <button type="button" class="btn btn-light">Purchase</button>
                    </th>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection