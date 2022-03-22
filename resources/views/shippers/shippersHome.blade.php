@extends('layouts.app')

@section('content')

<div class="header">
    <h3>Shipper List</h3>
</div>

<div class="row">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">New Shipper <span class="sr-only"></span></a>
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
            </ul>
        </div>
    </nav>
</div>

<div class="card">
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
            </tr>

        <tbody>
            <tr>
                <td>1</td>
                <td>Shipping Company A</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Shipping Company B</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Shipping Company C</td>
            </tr>


        </tbody>
        </thead>

</div>
@endsection