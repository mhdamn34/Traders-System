@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            
                <div class="col">
                    <h2> Show Product Details</h2>
                </div>
                <div class="col d-flex justify-content-end">
                    <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                </div>
            
        </div>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Product Name:</strong>
                        {{ $product->productName}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>SupplierID:</strong>
                        {{ $product->SupplierID}}
                    </div>
                    <div class="col">
                        <strong>CategoryID:</strong>
                        {{ $product->CategoryID}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>quantity Per Unit:</strong>
                        {{ $product->quantityPerUnit }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Unit Price:</strong>
                        {{ $product->unitPrice }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Unit Stock:</strong>
                        {{ $product->unitStock }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Unit Order:</strong>
                        {{ $product->unitOrder }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Reorder Level:</strong>
                        {{ $product->reorderLevel }}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Unit Discontinued:</strong>
                        {{ $product->discontinued }}
                    </div>
                </div>
            </div>
            

        </div>

    </div>
</div>



@endsection