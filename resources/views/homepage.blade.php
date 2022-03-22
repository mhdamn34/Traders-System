@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-text">
            <strong>CRUD for ProjectNorthwind</strong>
        </div>
    </div>
    <div class="card-body">
        <div class="btn-group" role="group" aria-label="Basic example">
            <!-- <a class="btn btn-primary" href="#">Home</a> -->
            
            <a class="btn btn-primary" href="{{ route('categories.index') }}">Category</a>
            <a class="btn btn-primary" href="{{ route('products.index') }}">Product</a>
            <a type="button" class="btn btn-primary">Supplier</a>

        </div>
    </div>
</div>
@endsection