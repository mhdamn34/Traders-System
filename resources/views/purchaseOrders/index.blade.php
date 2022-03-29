@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Purchase Order</h3>

        <div class="row">
            <div class="col">
                <a href=" {{ route('purchaseOrder.create') }} " class="btn btn-primary"> Add new Purchase</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/') }} " class="btn btn-secondary">Home</a>
            </div>
        </div>
    </div>
    <div class="card-body">

        @if ($message = Session::get('success'))
        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"> id</th>
                    <th scope="col"> Status</th>
                    <th scope="col"> Supplier</th>
                    <th scope="col"> Total</th>
                    <th scope="col"> Submitted</th>
                    <th scope="col"> Approve By</th>
                    <th scope="col"> Approve</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchaseOrders as $purchaseOrder)
                <tr>
                    <td> {{ $purchaseOrder -> id }} </td>
                    <td> {{ $purchaseOrder -> status }}</td>
                    <td> {{ $purchaseOrder -> supplier_id }}</td>
                    <td> {{ $purchaseOrder -> payment_amount }}</td>
                    <td> {{ $purchaseOrder -> submitted_date }}</td>
                    <td> {{ $purchaseOrder -> approved_by }}</td>
                    <td> {{ $purchaseOrder -> approved_date }}</td>
                    <td>
                        <form action="{{ route('purchaseOrder.destroy', $purchaseOrder->id) }}" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href=" {{ route('purchaseOrder.create', $purchaseOrder->id) }} " role="button">Update</a>
                                <a class="btn btn-info" href="{{ route('purchaseOrder.show', $purchaseOrder->id) }}" role="button">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection