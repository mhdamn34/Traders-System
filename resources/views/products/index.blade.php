@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Product List</h3>

        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route ('product.create') }}">New Product <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collect Data via E-mail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add From Outlook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">E-mail List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="  {{ url('/') }} ">Home</a>
                    </li>
                </ul>
            </div>
        </nav>

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
                    <th scope="col"> ID</th>
                    <th scope="col"> Product Name</th>
                    <th scope="col"> Product Code</th>
                    <th scope="col"> Category</th>
                    <th scope="col"> Supplier</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $products as $product)
                <tr>
                    <td> {{ $product -> id}}</td>
                    <td> {{ $product -> product_name}}</td>
                    <td> {{ $product -> product_code}}</td>
                    <td> {{ $product -> category}}</td>
                    <td> {{ $product -> supplier_id}}</td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href=" {{ route('product.edit', $product->id) }} " role="button">Update</a>
                                <a class="btn btn-info" href=" {{ route('product.show', $product->id) }} " role="button">View</a>
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