@extends('layouts.app')

@section('content')

<div class="header">
    <h3>Employee List</h3>
</div>

<div class="row">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/createEmployee')}}">New Employee <span class="sr-only"></span></a>
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
                    <a class="nav-link" href="#">Reports</a>
                </li>
                <li class="nav-item active">
                    <div class="input-group mb-3">
                        <select class="form-select" id="reportID">
                            <option selected> </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
<br>
<div class="card">
    <table class="table table-bordered mt-3">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Company</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">E-mail Address</th>
                <th scope="col">Job Title</th>
                <th scope="col">Business Phone</th>
                <th scope="col">Home Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>

            </tr>

        <tbody>
            @foreach($employees as $employee)

            <tr>
                <td scope="row">{{ $employee->ID }} </td>
                <td> {{ $employee->Company}}</td>
                <td> {{ $employee->FirstName}} </td>
                <td> {{ $employee->LastName}}</td>
                <td> {{ $employee->EmailAddress}}</td>
                <td> {{ $employee->JobTitle}}</td>
                <td> {{ $employee->BussinessPhone}}</td>
                <td> {{ $employee->HomePhone}}</td>
                <td> {{ $employee->Address}}</td>
                <td> {{ $employee->City}}</td>
                
            </tr>
            @endforeach


        </tbody>
        </thead>

</div>
@endsection