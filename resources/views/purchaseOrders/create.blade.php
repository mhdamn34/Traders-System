@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3> Purchase Order # (New)</h3>

        <div class="row">
            <ul class="nav nav-pills justify-content-centent">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Submit for Approval</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Approve Purchase</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ">Cancel Purchase</a>
                </li>
            </ul>

            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/purchase') }} " class="btn btn-secondary"> Close</a>
            </div>
        </div>
    </div>

    <div class="card-body">

        <div class="row">
            <div class="col-2">
                <p>Supplier</p>
            </div>
            <div class="col">
                <div class="input-group mb-3" class="form-group">
                    <select class="form-select" id="supplierSelect">
                        <option selected> </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <p>Expected Date</p>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-2">
                <p>Created By:</p>
            </div>
            <div class="col">
                <div class="input-group mb-3" class="form-group">
                    <select class="form-select" id="createdSelect">
                        <option selected> </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <p>Creation Date</p>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-2">
                <p> Submitted By:</p>
            </div>
            <div class="col">
                <div class="input-group mb-3" class="form-group">
                    <select class="form-select" id="submittedSelect">
                        <option selected> </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <p>Submitted Date</p>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <p> Approved By:</p>
            </div>
            <div class="col">
                <div class="input-group mb-3" class="form-group">
                    <select class="form-select" id="approvedSelect">
                        <option selected> </option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <p>Aprroved Date</p>
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Purchase Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Inventory Receiving</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Payment Information</a>
            </li>
        </ul>
    </div>
</div>


@endsection