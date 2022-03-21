@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-body">

        <div class="row">
            <div class="col">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Product</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="{{ url('/home') }}" class="btn btn-secondary"> Back</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success mt-5">

            <p>{{ $message }}</p>

        </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Picture</th>                  
                    <th width="215px">Action</th>
                </tr>
            </thead>

            @foreach ($categories as $category)

            <tbody>
                <!-- this is second row -->
                <tr>
                    <th> {{++$i}} </th>
                    <td>{{ $category->categoryName }}</td>
                    <td>{{ $category->Description }}</td>
                    <td>{{ $category->Picture }}</td>
                    
                    <td>
                        <form action="" method="POST">
                            <a class="btn btn-info" href="{{ route('categories.show', $category->id)  }}">Show</a>
                            <a class="btn btn-primary" href=" {{ route('categories.edit',$category->id) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>




                </tr>

            </tbody>
            @endforeach
        </table>
    </div>
</div>

@endsection