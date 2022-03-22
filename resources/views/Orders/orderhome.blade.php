@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Order List</h3>
    </div>
  
    <thead>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Add New Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">View Invoice</a>
            </li>

            <a class="nav-link" href="#">Home</a>

        </ul>

    </thead>

</div>


<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Salesperson</th>
                <th>Customer</th>
                <th>Ship Date</th>
                <th>Shipping</th>
                <th>Taxes</th>
                <th>Total</th>

            </tr>
        </thead>


    </table>
</div>
</div>


@endsection