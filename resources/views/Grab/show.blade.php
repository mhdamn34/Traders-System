@extends('layouts.main.app')

@section('content')

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mt-5 mb-3">View Record</h5>

                    <div class="form-group">
                        <label>Rider Name : </label>
                        <p><b>{{ $order_grab->rider->rider_name }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Order At :</label>
                        <p><b>{{ $order_grab -> created_at }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Order Name :</label>
                        <p><b>{{ $order_grab -> order_name }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Order Description :</label>
                        <p><b>{{ $order_grab -> order_description }}</b></p>
                    </div>
                   
                    
                    <p><a href="{{ route('Grab.index') }}" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

@endsection