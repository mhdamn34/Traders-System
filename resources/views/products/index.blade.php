@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Product List</h3>

        <div class="row">
            <div class="col">
                <a href=" {{ route('products.create') }}" class="btn btn-primary"> New product</a>
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
                    <th scope="col"> Id</th>
                    <th scope="col"> Supplier Id</th>
                    <th scope="col"> Product Code</th>
                    <th scope="col"> Product Name</th>
                    <th scope="col"> Description</th>
                    <th scope="col"> Standard Cost</th>
                    <th scope="col"> List Price</th>
                    <th scope="col"> Rerorder Level</th>
                    <th scope="col"> Quantity Per Unit</th>
                    <th scope="col"> Discontinued </th>
                    <th scope="col"> Category</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $products as $product)
                <tr>
                    <td> {{ $product -> id}}</td>
                    <td> </td>
                    <td> {{ $product -> product_code}} </td>
                    <td> {{ $product -> product_name}}</td>
                    <td> {{ $product -> description}}</td>
                    <td> {{ $product -> standard_cost}}</td>
                    <td> {{ $product -> list_price}}</td>
                    <td> {{ $product -> reorder_level}}</td>
                    <td> {{ $product -> target_level}}</td>
                    <td> {{ $product -> quantity_per_unit}}</td>
                    <td> {{ $product -> discontinued}}</td>
                    <td> {{ $product -> minimum_reorder}}</td>
                    <td> {{ $product -> category}}</td>
                    <td>
                        <form action=" {{ route('product.destroy', $product->id) }}" method="POST">
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