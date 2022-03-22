@extends('layouts.app')

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
            
            <a class="btn btn-primary" href=" {{ url('/suppliers') }} ">Supplier</a>
            <a class="btn btn-primary" href="{{ url('/shippers') }}">Shipper</a>
            <a class="btn btn-primary" href="{{ url('/orders') }}">Orders</a>
            <a class="btn btn-primary" href=" ">Purchase Orders</a>
            <a class="btn btn-primary" href="">Employees</a>
            <!-- <a type="button" class="btn btn-primary">Supplier</a> -->

        </div>
    </div>
</div>
@endsection