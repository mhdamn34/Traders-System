@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Purchase Orders</h3>

        <div class="row">
            <div class="col">
                <a href="{{ url('/createPurchase') }}" class="btn btn-primary"> Add new Purchase</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="#" class="btn btn-secondary"> Home</a>
            </div>
        </div>
    </div>

    <div class="card-body">


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"> #</th>
                    <th scope="col"> Status</th>
                    <th scope="col"> Supplier</th>
                    <th scope="col"> Total</th>
                    <th scope="col"> Submitted By</th>
                    <th scope="col"> Submitted</th>
                    <th scope="col"> Approved By</th>
                    <th scope="col"> Approved</th>
                    <th scope="col"> Date Paid</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td> submitted</td>
                    <td> Supplier E</td>
                    <td> RM1,040.00</td>
                    <td> Andrew Cencini</td>
                    <td> 26/4/2006</td>
                    <td> Robert Zare</td>
                    <td> 30/4/2006</td>
                    <td> ...</td>
                </tr>
            </tbody>

        </table>
    </div>
</div>






@endsection