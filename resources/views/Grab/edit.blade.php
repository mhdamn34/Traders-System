@extends('layouts.main.app')

@section('content')

<div class="card">
<form action=" {{ route('Grab.edit') }} " method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Rider Name</label>
                        <div class="col-sm-9">

                            <div class="input-group mb-3" class="form-group">
                                <select class="form-select" id="ridername" name="rider_id">        
                                    <option value="1">Fina</option>
                                    <option value="3">Ali</option>
                                    <option value="5">Fixi</option>
                                    <option value="6">Lili</option>         
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-3 col-form-label">Order Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="order_name" class="form-control" id="ordername">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-3 col-form-label">Order Desciption</label>
                        <div class="col-sm-9">
                            <input type="text" name="order_description" class="form-control" id="orderdescription">
                        </div>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"> Save</button>
                </div>
        </form>

</div>


</div>




@endsection