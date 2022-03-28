@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Order List</h3>
        <a href=" {{ route('Grab.create') }}" class="btn btn-secondary">Add new order</a>
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
        </thead>
        <tbody>
            @foreach ($order_grab as $order_grab)
            <tr>
                 <td>{{ $order_grab -> id }} </td>
                <td>{{ $order_grab -> created_at }} </td>
                <td> {{ $order_grab -> order_name }} </td>
                <td> {{ $order_grab -> order_description }}</td>
                <td> {{ $order_grab->rider->rider_name }}</td>
                <td>
                    <form action="{{ route('Grab.destroy', $order_grab->id) }}" method="POST">
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-primary" href=" {{ route('Grab.create', $order_grab->id) }} " role="button">Update</a>
                            <a class="btn btn-info" href="{{ route('Grab.show', $order_grab->id) }}" role="button">View</a>
                            @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection