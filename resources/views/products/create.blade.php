@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <h2>Add New Product</h2>
                </div>
            </div>
        </div>
    </div>



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


    <div class="card-body">

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Product Name:</strong>
                        <input type="text" name="productName" class="form-control" placeholder="product name">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Quantity per Unit:</strong>
                        <input type="text" name="quantityPerUnit" class="form-control" placeholder="Quantity per Unit">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Unit Price:</strong>
                        <input type="text" name="unitPrice" class="form-control" placeholder="Unit Price">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Unit in Stock</strong>
                        <input type="number" name="unitStock" class="form-control" placeholder="Unit in Stock">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Unit on Order:</strong>
                        <input type="number" name="unitOrder" class="form-control" placeholder="Unit on Order">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Reorder level:</strong>
                        <input type="number" name="reorderLevel" class="form-control" placeholder="Reorder Level">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label for="discontinued">Discontinued Status</label>
                        <select name="discontinued" class="form-control" aria-label="Default select example">
                            <option value="" disabled>Discontinued</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>

                <div class="card-footer mt-5">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary mt-5"> Submit</button>
                        <a class="btn btn-secondary mt-5" href=" {{ route('products.index') }} " > Back</a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection


            