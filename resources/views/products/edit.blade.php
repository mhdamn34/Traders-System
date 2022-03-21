@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">
        <div class="row">
            <div class="col">
                <h2>Update your product Status</h2>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('products.index') }}" class="btn btn-secondary"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors -> any())

    <div class="alert alert-danger">
        <strong>Whoops! Errors </strong>
        <ul>
            @foreach ($errors -> all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>

    @endif

    <div class="card-body">
        <form action="{{ route('products.update'), $product->id }}" method="POST">

            @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Product Name:</strong>
                    <input type="text" name="productName" class="form-control" value="{{ $product -> productName }}" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Quantity per Unit:</strong>
                    <input type="text" name="quantityPerUnit" class="form-control" value=" {{ $product -> quantityPerUnit }} ">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unit Price:</strong>
                    <input type="text" name="unitPrice" class="form-control" value=" {{ $product -> unitPrice }} " placeholder="Unit Price">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unit in Stock</strong>
                    <input type="number" name="unitStock" class="form-control" value=" {{ $product -> unitStock }} " placeholder="Unit in Stock">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Unit on Order:</strong>
                    <input type="number" name="unitOrder" class="form-control" value=" {{ $product -> unitOrder }} " placeholder="Unit on Order">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Reorder level:</strong>
                    <input type="number" name="reorderLevel" class="form-control" value=" {{ $product -> reorderLevel }} " placeholder="Reorder Level">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="discontinued">Discontinued Status</label>
                    <select name="discontinued" class="form-control" aria-label="Default select example" value=" {{ $product -> discontinued }} ">
                        <option value="" disabled>Discontinued</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>

        </form>

    </div>
</div>



@endsection