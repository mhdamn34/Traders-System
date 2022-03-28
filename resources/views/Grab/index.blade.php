@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Order List</h3>  
    </div>
</div>
<br>
<div class="card">
    <table class="table table-bordered mt-3">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Order Date</th>
                <th scope="col">Order ID</th>
                <!-- <th scope="col">Last Name</th> -->
                <th scope="col">Rider Name</th>
                <th scope="col">Job Title</th>
                <!-- <th scope="col">Business Phone</th> -->
                <th scope="col">Home Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col"> Action</th>
            </tr>

        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td> {{ $employee->id }} </td>
                <td> {{ $employee->company}}</td>
                <td> {{ $employee->first_name}} </td>
                <!-- <td> {{ $employee->last_name}}</td> -->
                <td> {{ $employee->email_address}}</td>
                <td> {{ $employee->job_title}}</td>
                <!-- <td> {{ $employee->business_phone}}</td> -->
                <td> {{ $employee->home_phone}}</td>
                <td> {{ $employee->address}}</td>
                <td> {{ $employee->city}}</td>
                <td>
                    <form action=" {{ route('employee.destroy', $employee->id) }}" method="POST">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href=" {{ route('employees.edit', $employee->id) }} " role="button">Update</a>
                            <a class="btn btn-info" href=" {{ route('employee.show', $employee->id) }} " role="button">View</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach

            </thead>
        </tbody>
</div>

@endsection