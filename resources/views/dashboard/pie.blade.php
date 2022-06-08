@extends('layouts.main.app')

@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                Pie Chart
            </div>
            <div class="card-body">
                <div id="chart_div"></div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header">
                Bar Chart
            </div>
            <div class="card-body">
                <div id="bar_chart_div"></div>
            </div>
        </div>
    </div>
</div>



@endsection