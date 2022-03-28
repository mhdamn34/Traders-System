@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Create New Order</h5>
        <a href=" {{ route('Grab.index') }}" class="btn btn-secondary">Back</a>
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

        <form action=" {{ route('Grab.store') }} " method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Rider Name</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-3" class="form-group">
                                <select class="form-select" id="ridername" name="rider_id">    
                                    <div class="control-group">
                                        
                                    </div>  
                                  
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-3 col-form-label">Order Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="order_name" class="form-control" id="ordername">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-3 col-form-label">Order Description</label>
                        <div class="col-sm-9">
                            <textarea name="order_description" class="form-control" id="orderdescription"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"> Save</button>
                </div>
        </form>

    </div>

    @endsection