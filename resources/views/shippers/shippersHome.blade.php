@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Shipper List</h3>

        <div class="row">
            <div class="col">
                <a href="{{ url('/newShipper') }}" class="btn btn-primary"> New Shipper</a>
                <a href="" class="btn btn-primary"> Collect Data via E-mail</a>
                <a href="" class="btn btn-primary"> Add From Outlook</a>
                <a href="" class="btn btn-primary"> E-mail List</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/') }} " class="btn btn-secondary">Home</a>
            </div>
        </div>

    </div>

    <br>
    <div class="card-body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>
        @endif
        <table class="table table-bordered mt-3">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Company</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">E-mail Address</th>
                    <th scope="col">Business Phone</th>
                    <th scope="col">Job Title</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>

            <tbody>
                @foreach($shippers as $shipper)

                <tr>
                    <td>{{$shipper->id}}</td>
                    <td>{{$shipper->company}}</td>
                    <td>{{$shipper->first_name}}</td>
                    <td>{{$shipper->last_name}}</td>
                    <td>{{$shipper->email_address}}</td>
                    <td>{{$shipper->business_phone}}</td>
                    <td>{{$shipper->job_title}}</td>
                    <td>
                        <form action=" {{ route('shipper.destroy', $shipper->id) }}" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href=" {{ route('shipper.edit', $shipper->id) }} " role="button">Update</a>
                                <a class="btn btn-info" href=" {{ route('shipper.show', $shipper->id) }} " role="button">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
            </thead>

    </div>
</div>
@endsection