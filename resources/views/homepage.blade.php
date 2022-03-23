@extends('layouts.main.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-text">
            <strong>CRUD for ProjectNorthwind</strong>
        </div>
    </div>
    <div class="card-body">
        <div class="btn-group" role="group" aria-label="Basic example">
            <!-- <a class="btn btn-primary" href="#">Home</a> -->
            
            <a class="btn btn-primary" href=" {{ url('/supplier') }} ">Supplier</a>
            <a class="btn btn-primary" href="{{ url('/shippers') }}">Shipper</a>
            <a class="btn btn-primary" href="{{ url('/orders') }}">Orders</a>
            <a class="btn btn-primary" href=" {{ url('/purchase')}} ">Purchase Orders</a>
            <a class="btn btn-primary" href=" {{ url('/employee') }}">Employees</a>
            <a class="btn btn-primary" href=" {{ url('/customer') }}">customer</a>
            <!-- <a type="button" class="btn btn-primary">Supplier</a> -->

        </div>
    </div>
</div>
@endsection