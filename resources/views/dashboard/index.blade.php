@extends('index')
@section('content')
    <div class='mb-5'>
        <div class="my-3">
            <h3>
                <i class="bi bi-bar-chart-fill"></i> Dashboard
            </h3>
        </div>

        <div class='row justify-content-around'>

            <div class="card card-dashboard col-sm-4 col-12 px-0 my-2 mx-2">
                <a href="{{ url('dashboard-purchases') }}">
                    <div class='card-img-top'>
                        <h3 class=" w-100">
                            <span class='badge bg-success w-100'>
                                Total de compras
                            </span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text card-dashboard-text text-center text-success ">{{ $totalPurchases }}</p>
                    </div>
                </a>
            </div>

            <div class="card card-dashboard col-sm-4 col-12 px-0 my-2 mx-2">
                <a href="{{ url('dashboard-purchases') }}">
                    <div class='card-img-top'>
                        <h3 class=" w-100">
                            <span class='badge bg-success w-100'>
                                Total de compras
                            </span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text card-dashboard-text text-center text-success ">209</p>
                    </div>
                </a>
            </div>


        </div>
    @endsection
