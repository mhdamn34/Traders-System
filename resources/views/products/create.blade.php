@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5> Add New Product</h5>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label">Product</label>
                    </div>
                    <div class="row mb-3">
                        <label for="productcode" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="product_code" class="form-control" id="productcode">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="productname" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="product_name" class="form-control" id="productname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="description" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="standardcost" class="col-sm-3 col-form-label">Standard Cost</label>
                        <div class="col-sm-9">
                            <input type="text" name="standard_cost" class="form-control" id="standardcost">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="listprice" class="col-sm-3 col-form-label">List Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="list_price" class="form-control" id="listprice">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="reorderlevel" class="col-sm-3 col-form-label">Reorder Level</label>
                        <div class="col-sm-9">
                            <input type="text" name="reorder_level" class="form-control" id="reorderlevel">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="targetlevel" class="col-sm-3 col-form-label">Target Level</label>
                        <div class="col-sm-9">
                            <input type="text" name="target_level" class="form-control" id="targetlevel">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="quantityperunit" class="col-sm-3 col-form-label">Quantity Per Unit</label>
                        <div class="col-sm-9">
                            <input type="text" name="quantity_per_unit" class="form-control" id="quantityperunit">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="col-sm-3 col-form-label"> Discontinued</label>
                        
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <input type="text" name="category" class="form-control" id="category">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Save</button>
            </div>
        </form>
    </div>

</div>
@endsection