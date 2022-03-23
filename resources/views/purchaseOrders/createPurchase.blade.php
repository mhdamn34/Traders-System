@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3> Purchase Order # (New)</h3>

        <div class="row">
            <div class="col-2">
                status
            </div>
            <div class="col-8 text-align-center">
                <ul class="nav flex-column justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Submit for approval</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Approve purchase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cancel Purchase</a>
                    </li>
                </ul>
            </div>

            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/purchaseHome') }} " class="btn btn-secondary"> Close</a>
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

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#purchaseDetails" type="button" role="tab" aria-controls="home" aria-selected="true">Purchase Details </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#inventoryReceiving" type="button" role="tab" aria-controls="profile" aria-selected="false">Inventory Receiving </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#paymentInformation" type="button" role="tab" aria-controls="contact" aria-selected="false">Payment Information </button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="purchaseDetails" role="tabpanel" aria-labelledby="home-tab">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> Product</th>
                            <th scope="col"> Qty</th>
                            <th scope="col"> Unit Cost</th>
                            <th scope="col"> Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <div class="tab-pane fade" id="inventoryReceiving" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"> Product</th>
                            <th scope="col"> Qty</th>
                            <th scope="col"> Unit Cost</th>
                            <th scope="col"> Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="paymentInformation" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>

    </div>
</div>


@endsection