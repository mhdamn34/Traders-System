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
          <a class="nav-link active" aria-current="page" href="#">Status</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Create Invoice</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ">Ship Order</a>
        </li>
      </ul>
       <form class="d-flex">
        
        <button class="btn btn-outline-success" type="submit">Home</button>
      </form>
     
    </div>
  </div>
</nav>
    <nav class="nav">
        <a class="" aria-current="page" href="#">Go to Product
            <select name="" id="">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
            </select>
        </a>
        <div class="row">
            <div class="col">

            </div>
            <div class="col">
                
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
                <a class="nav-link active" aria-current="page" href="#">Shipping Information</a>
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

          
        </table>
    </div>

    </div>

</body>




@endsection