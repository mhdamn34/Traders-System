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
                <th scope="col">Order Name</th>
                <th scope="col">Order Description</th>
                <th scope="col">Rider Name</th>
                <th scope="col"> Action</th>
            </tr>

        <tbody>
          
            <tr>
                <td>  </td>
                <td> </td>
                <td>  </td>
                <td> </td>
                <td></td>
                <td> 
                <form action=" " method="POST">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            
                            <a class="btn btn-info" href=" " role="button">View</a>
                          
                         
                        </div>
                    </form>
                </td>
          
               
            </tr>
           

            </thead>
        </tbody>
</div>

@endsection