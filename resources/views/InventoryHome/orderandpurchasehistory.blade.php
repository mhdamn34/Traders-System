@extends('layouts.app')

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
        <a class="nav-link" href="#">Close</a>

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


<div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Order Date</th>
                <th>Transaction</th>
                <th>Company Name</th>
                <th>Quantity</th>

            </tr>
        </thead>


    </table>
</div>
</div>


@endsection