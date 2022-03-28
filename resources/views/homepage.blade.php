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
        <div class="card-group">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Active Orders</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Inventory to Reorder</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Quick Links</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-primary" href=" {{ url('/supplier') }} ">Supplier</a>
            <a class="btn btn-primary" href="{{ url('/shippers') }}">Shipper</a>
            <a class="btn btn-primary" href="{{ url('/orders') }}">Orders</a>
            <a class="btn btn-primary" href=" {{ url('/purchase') }} ">Purchase Orders</a>
            <a class="btn btn-primary" href=" {{ url('/employee') }}">Employees</a>
            <a class="btn btn-primary" href=" {{ url('/customer') }}">Customer</a>
            <a class="btn btn-primary" href=" {{ url('/product') }}"> Product</a>
            <a class="btn btn-primary" href=" {{ url('/order_grab') }}"> Order</a>
        </div>
    </div>


</div>



@endsection