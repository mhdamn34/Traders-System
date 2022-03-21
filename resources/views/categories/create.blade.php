@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-right">
                    <h2>Add New Category</h2>
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

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Category Name:</strong>
                        <input type="text" name="categoryName" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Description:</strong>
                        <input type="text" name="descrpition" class="form-control" placeholder="">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Picture:</strong>
                        <input type="text" name="picture" class="form-control" placeholder="">
                    </div>
                </div>

                
                <div class="card-footer mt-5">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary mt-5"> Submit</button>
                        <a class="btn btn-secondary mt-5" href=" {{ route('categories.index') }} " > Back</a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>

@endsection


            