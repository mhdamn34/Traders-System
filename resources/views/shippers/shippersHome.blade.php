@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Shipper List</h3>

        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/NewShippers')}}">New Shipper <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Collect Data via E-mail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Add From Outlook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">E-mail List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ url('/home') }} ">Home</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>
</div>

<!-- <div class="row">

</div> -->
<br>
<div class="card">
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
@endsection