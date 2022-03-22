@extends('layouts.app')

@section('content')

<div class="header">
    <h3>Sales Report</h3>
</div>

<div class="row">
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/NewShippers')}}">New Shipper <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Print</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Preview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Close</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="card-body">
    <div class="row">
        <div class="col">
            <label for="sales">Select Sales Report</label>

            <select name="salesreport" id="salesreprt">

                <option value="category">Sales By Category</option>
                <option value="country">Sales By Country</option>
                <option value="customer">Sales By Customer</option>
                <option value="employee">Sales By Employee</option>
                <option value="product">Sales By Product</option>

            </select>

        </div>

        <div class="col">
            <label for="period">Select Sales Period</label>

            <select name="salesperiod" id="salesperiod">

                <option value="monthly">Monthly Sales</option>
                <option value="quarterly">Quarterly Sales</option>
                <option value="yearly">Yearly Sales</option>
            </select>

            
        </div>
    </div>
</div>


<label for="salesitems">Filter Sales Items...</label>

<select name="salesitems" id="salesitems">

    <option value="almond">Northwind Traders Almond</option>
    <option value="beer">Northwind Traders Beer</option>
    <option value="spread">Northwind Traders Boysenberry Spread </option>


</select>






@endsection