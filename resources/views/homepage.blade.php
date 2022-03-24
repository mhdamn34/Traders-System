@extends('layouts.main.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-header">
            <h3>Northwind Traders</h3>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <div class="input-group mb-3" style="padding-top: 7px;">
                            <label class="" for="inputGroupSelect01" style="padding-right: 10px;">I am:</label>
                            <select class="form-select" id="inputGroupSelect01">
                                <option selected> Choose User</option>
                                <option value="1">One</option>
                            </select>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">New Customer Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">New Purchase Order</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-3">
qweqe
            </div>
            <div class="col-6">
qwe
            </div>

            <div class="col-3">
qweqwe
            </div>
        </div>


        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href=" {{ url('/supplier') }} ">Supplier</a>
            <a class="btn btn-primary" href="{{ url('/shippers') }}">Shipper</a>
            <a class="btn btn-primary" href="{{ url('/orders') }}">Orders</a>
            <a class="btn btn-primary" href=" {{ url('/purchase')}} ">Purchase Orders</a>
            <a class="btn btn-primary" href=" {{ url('/employee') }}">Employees</a>
            <a class="btn btn-primary" href=" {{ url('/customer') }}">Customer</a>
            <a class="btn btn-primary" href=" {{ url('/product') }}"> Product</a>

        </div>
    </div>


</div>



@endsection