@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Customers Menu</h3>

        <div class="row">
            <div class="col">
                <a href="{{ url('/customer/create') }}" class="btn btn-primary"> New Customer</a>
                <a href="" class="btn btn-primary"> Collect Data via E-mail</a>
                <a href="" class="btn btn-primary"> Add From Outlook</a>
                <a href="" class="btn btn-primary"> E-mail List</a>
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
                    <th scope="col"> Company</th>
                    <th scope="col"> Name</th>
                    <th scope="col"> E-mail</th>
                    <th scope="col"> Mobile Phone</th>
                    <th scope="col"> Job Title</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $customers as $customer)
                <tr>
                    <td> {{ $customer -> id}}</td>
                    <td> {{ $customer -> company}}</td>
                    <td> {{ $customer -> first_name}} {{ $customer -> last_name}}</td>
                    <td> {{ $customer -> email_address}}</td>
                    <td> {{ $customer -> mobile_phone}}</td>
                    <td> {{ $customer -> job_title}}</td>
                    <td>
                        <form action=" {{ route('customer.destroy', $customer->id) }}" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href=" {{ route('customer.edit', $customer->id) }} " role="button">Update</a>
                                <a class="btn btn-info" href=" {{ route('customer.show', $customer->id) }} " role="button">View</a>
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