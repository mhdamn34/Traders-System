@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Order List</h3>
    </div>
  
    <thead>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{url('/neworder')}}">Add New Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">View Invoice</a>
            </li>

            <a class="nav-link" href="{{ url('/home') }}">Home</a>

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
        <tbody>
            @foreach($orders as $order)

            <tr>
                <td>{{$order->OrderID}}</td>
                <td>{{$order->OrderDate}}</td>
                <td>{{$order->StatusName}}</td>
                <td>{{$order->Salesperson}}</td>
                <td>{{$order->customer}}</td>
                <td>{{$order->ShippedDate}}</td>
                <td>{{$order->ShippingFee}}</td>
                <td>{{$order->Taxes}}</td>
                <td>{{$order->Total}}</td>
            </tr>
            @endforeach
        </tbody>


    </table>
</div>
</div>


@endsection