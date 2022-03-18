@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-body">

        <div class="row">
            <div class="col">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ url('/home') }}" class="btn btn-secondary"> Back</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-5">

            <p>{{ $message }}</p>

        </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead class="table-primary" >
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Supplier ID</th>
                    <th scope="col">Category ID</th>
                    <th scope="col">Quantity Per Unit</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col">Unit in Stock</th>
                    <th scope="col">Units on order</th>
                    <th scope="col">Reorder Level</th>
                    <th scope="col">Discontinued</th>
                    <th width="215px">Action</th>
                </tr>
            </thead>

            @foreach ($products as $product)

            <tbody>
                <!-- this is second row -->
                <tr>
                    <th> {{++$i}} </th>
                    <td>{{ $product->productName }}</td>
                    <td>{{ $product->SupplierID }}</td>
                    <td>{{ $product->CategoryID }}</td>
                    <td>{{ $product->quantityPerUnit }}</td>
                    <td>{{ $product->unitPrice }}</td>
                    <td>{{ $product->unitStock }}</td>
                    <td>{{ $product->unitOrder }}</td>
                    <td>{{ $product->reorderLevel }}</td>
                    <td>{{ $product->discontinued }}</td>
                    <td>
                        <form action="" method="POST">
                            <a class="btn btn-info" href="{{ route('products.show', $product->id)  }}">Show</a>
                            <a class="btn btn-primary" href="">Edit</a>
                            <!-- @csrf
                            @method('DELETE') -->
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>




                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection