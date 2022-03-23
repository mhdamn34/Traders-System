@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Customers Menu</h3>

        <div class="row">
            <div class="col">
                <a href="{{ url('/customer/create') }}" class="btn btn-primary"> New Customer</a>
                <a href="" class="btn btn-primary"> Coolect Data via E-mail</a>
                <a href="" class="btn btn-primary"> Add From Outlook</a>
                <a href="" class="btn btn-primary"> E-mail List</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/home') }} " class="btn btn-secondary">Home</a>
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
                    <th scope="col"> Id</th>
                    <th scope="col"> Company</th>
                    <th scope="col"> First Name</th>
                    <th scope="col"> Last Name</th>
                    <th scope="col"> E-mail Address</th>
                    <th scope="col"> Businees Phone</th>
                    <th scope="col"> Job Title</th>
                    <th scope="col"> Address</th>
                    <th scope="col"> Web Page</th>
                    <th scope="col"> Notes</th>
                    <th scope="col"> Action</th>


                </tr>
            </thead>

            <tbody>
                @foreach( $customers as $customer)
                <tr>
                    <td> {{ $customer -> id}}</td>
                    <td> {{ $customer -> company}}</td>
                    <td> {{ $customer -> first_name}}</td>
                    <td> {{ $customer -> last_name}} </td>
                    <td> {{ $customer -> email_address}}</td>
                    <td> {{ $customer -> business_phone}}</td>
                    <td> {{ $customer -> job_title}}</td>
                    <td> {{ $customer -> address}},{{ $customer -> city}},{{ $customer -> state}},
                        {{ $customer -> postal_code}}, {{ $customer -> country}}
                    </td>
                    <td> {{ $customer -> web_page}}</td>
                    <td> {{ $customer -> notes}}</td>
                    <td>
                        <form action=" {{ route('customer.destroy', $customer->id) }}" method="POST">
                            <a class="btn btn-primary" href=" {{ route('customer.edit', $customer->id) }} " role="button">Update</a>
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-secondary">Delete</button>
                        </form>
                    </td>


                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>






@endsection