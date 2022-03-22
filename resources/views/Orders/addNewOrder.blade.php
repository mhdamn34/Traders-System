@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Order # (New)</h3>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Status :</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create Invoice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Ship Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Complete Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Delete Order</a>
                    </li>
                </ul>
                <form class="d-flex">

                    <button class="btn btn-outline-success" type="submit">Home</button>
                </form>

            </div>
        </div>
    </nav>
    <nav>
        <div class="card">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-2 col-form-label">Customer</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-2 col-form-label">E-mail Address</label>
                        <div class="col-sm-10">
                            <input type="customer" class="form-control" id="customer">
                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-2 col-form-label">Salesperson</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" aria-label="Text input with dropdown button">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Andrew Cencini/a></li>
                                <li><a class="dropdown-item" href="#">Anne Hellung-Larsen</a></li>
                                <li><a class="dropdown-item" href="#">Jan Kotas</a></li>
                                <li><a class="dropdown-item" href="#">Laura Giussani</a></li>
                                <li><a class="dropdown-item" href="#">Mariya Sergienko</a></li>
                                <li><a class="dropdown-item" href="#">Michael Neiper</a></li>
                                <li><a class="dropdown-item" href="#">Nancy Freehafer</a></li>
                                <li><a class="dropdown-item" href="#">Robert Zare</a></li>
                                <li><a class="dropdown-item" href="#">Steven Thorpe</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-2 col-form-label">Order Date</label>
                        <div class="col-sm-10">
                            <input type="customer" class="form-control" id="customer">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>


    <thead>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Order Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Shipping Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Payment Information</a>
            </li>

        </ul>

    </thead>



</div>

<body>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>*</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Discount</th>
                        <th>Total Price</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th></th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>

                </tbody>


            </table>
        </div>

    </div>

</body>




@endsection