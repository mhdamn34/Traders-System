@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class=m-0>Customer List</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <!--Button Trigger modal-->
                        <div class="col-md-3">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">New Customer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Company</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-mail Address</th>
                        <th>Business Phone</th>
                        <th>Job Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->company }}</td>
                        <td>{{ $customer->first_name }}</td>
                        <td>{{ $customer->last_name }}</td>
                        <td>{{ $customer->email_address }}</td>
                        <td>{{ $customer->BusinessPhone }}</td>
                        <td>{{ $customer->JobTitle }}</td>
                    </tr>
                    @endforeach
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Customer Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="">
                                        {{-- <input type=""> --}}
                                        <div class=form-group>
                                            <label class="control-label">Company</label>
                                            <div>
                                                <input type="" class="form-control input-lg" name="company" value="">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </tbody>
            </table>
            <div class="card-footer">
                <!-- {{ $customers->withQueryString()->links() }} -->
            </div>
        </div>
    </div>
</div>
@endsection