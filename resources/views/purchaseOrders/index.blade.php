@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Purchase Order</h3>

        <div class="row">
            <div class="col">
                <a href="" class="btn btn-primary"> Add new Purchase</a>
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

            </tbody>
        </table>
    </div>
</div>

@endsection