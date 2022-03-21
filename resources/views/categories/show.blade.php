@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">

            <div class="col">
                <h2> Show Categoy Details</h2>
            </div>
            <div class="col d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>

        </div>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Category Name:</strong>
                        {{ $category->CategoryName}}
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Description:</strong>
                        {{ $category->quantityPerUnit }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <strong>Picture</strong>
                        {{ $category->Picture }}
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>



@endsection