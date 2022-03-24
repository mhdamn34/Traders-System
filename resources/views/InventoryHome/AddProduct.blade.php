@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Untitled</h3>
    </div>
    <nav class="nav">
        <a class="nav-link active" aria-current="page" href="#">Go to Product
            <select name="" id="">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
        </a>
        <a class="nav-link" href="#">Save and New</a>
        <a class="nav-link" href="{{url('/addproduct')}}">Close</a>

    </nav>
    <thead>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Product Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Order Purchase History</a>
            </li>

        </ul>

    </thead>

</div>
</head>

<div class="card-body">
    <table class="table">


        <div class="row">
            <div class="col">

                <div class="row mb-3">
                    <label for="productID" class="col-sm-2 col-form-label">Product ID</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="productID">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="name" class="form-control" id="name">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="productcode" class="col-sm-2 col-form-label">Product Code</label>
                    <div class="col-sm-10">
                        <input type="productcode" class="form-control" id="productcode">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="category" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input type="category" class="form-control" id="category">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="supplier" class="col-sm-2 col-form-label">Supplier</label>
                    <div class="col-sm-10">
                        <input type="supplier" class="form-control" id="supplier">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="qtyperunit" class="col-sm-2 col-form-label">Quantity Per Unit</label>
                    <div class="col-sm-10">
                        <input type="qtyperunit" class="form-control" id="qtyperunit">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="description" class="col-sm-2 col-form-label">Decription </label>
                    <div class="mb-3">

                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>




            </div>
            <div class="col">

                <div class="row mb-3">
                    <label for="standardcost" class="col-sm-2 col-form-label">Standard Cost</label>
                    <div class="col-sm-10">
                        <input type="standardcost" class="form-control" id="standardcost">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="listprice" class="col-sm-2 col-form-label">List Price</label>
                    <div class="col-sm-10">
                        <input type="listprice" class="form-control" id="listprice">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="reorderlevel" class="col-sm-2 col-form-label">Reorder Level</label>
                    <div class="col-sm-10">
                        <input type="reorderlevel" class="form-control" id="reorderlevel">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="targetlevel" class="col-sm-2 col-form-label">Target Level</label>
                    <div class="col-sm-10">
                        <input type="targetlevel" class="form-control" id="targetlevel">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Default Reorder Quantity</label>

                    <div class="row mb-1">
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                <label class="form-check-label" for="gridCheck1">
                                </label>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row mb-3">
                    <label for="attachments" class="col-sm-2 col-form-label">Attachments</label>
                    <div class="mb-3">
                        <input class="form-control" type="file" id="formFile" rows="3">
                    </div>
                </div>
            </div>


            </body>

        </div>
</div>

@endsection