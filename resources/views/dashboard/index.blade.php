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
                                Valor total vendido
                            </span>
                        </h3>
                    </div>
                    <div class="card-body">
                        <p class="card-text card-dashboard-text text-center text-success ">R$ {{ $valueTotalPurchases }}</p>
                    </div>
                </a>
            </div>
            
            
        </div>
        <div class="row justify-content-around">
            <div class="col-sm-8 col-6 mt-5">
                <h1 class="text-center mb-5">Produtos - Top 10</h1>
                <canvas id="top-products" width="100" height="50"></canvas>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-sm-8 col-6 mt-5">
                <h1 class="text-center mb-5">Itens por Setor</h1>
                <canvas id="purchases-departments" width="100" height="50"></canvas>
            </div>
        </div><div class="row justify-content-around">
            <div class="col-sm-8 col-6 mt-5">
                <h1 class="text-center mb-5">Categorias mais vendidas</h1>
                <canvas id="purchases-categories" width="100" height="50"></canvas>
            </div>
        </div>
            <script src="{{ asset('js/dashboardTopProducts.js') }}"></script>
            <script src="{{ asset('js/purchasesByDepartments.js') }}"></script>
            <script src="{{ asset('js/purchasesByCategories.js') }}"></script>
    @endsection
