@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Supplier List</h3>
        <div class="row">
            <div class="col">
                <a href="{{ route('supplier.create') }}" class="btn btn-primary">New Supplier</a>
                <a href="" class="btn btn-primary"> Collect Data via E-mail</a>
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
                    <th scope="col" width="180px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $suppliers as $supplier)
                <tr>
                    <td> {{ $supplier -> id}}</td>
                    <td> {{ $supplier -> company}}</td>
                    <td> {{ $supplier -> first_name}}</td>
                    <td> {{ $supplier -> last_name}} </td>
                    <td> {{ $supplier -> email_address}}</td>
                    <td> {{ $supplier -> business_phone}}</td>
                    <td> {{ $supplier -> job_title}}</td>
                    <td> {{ $supplier -> address}},{{ $supplier -> city}},{{ $supplier -> state}},
                         {{ $supplier -> postal_code}}, {{ $supplier -> country}}
                    </td>
                    <td> {{ $supplier -> web_page}}</td>
                    <td> {{ $supplier -> notes}}</td>
                    <td>
                        <form action=" {{ route('supplier.destroy', $supplier->id) }}" method="POST">
                            <a class="btn btn-primary" href=" {{ route('supplier.edit', $supplier->id) }} " role="button">Update</a>
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