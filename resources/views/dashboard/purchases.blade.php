@extends('index')
@section('content')
    <div class='mb-5'>
        <div class="my-3">
            <h3>
                <i class="bi bi-bar-chart-fill"></i> Dashboard - Vendas
            </h3>
        </div>
        <div class='row'>
            <div class='col-sm-3 col-12'>
                <form action="" class='form-control' onsubmit="return(checkYear())">
                    <div class='mb-1'>
                        <label for="yearSearchPurchase" class="form-label">Ano</label>
                        <input type="text" class="form-control only-number" id="yearSearchPurchase" required minlength="4"
                            maxlength="4">
                    </div>
                    <button type='submit' class='w-100 btn main main-btn'> <i class="bi bi-funnel"></i> Filtrar</button>
                </form>
            </div>
            <div class="col-sm-8 col-12">
                <canvas id="chart-purchase" width="100" height="50"></canvas>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboardPurchases.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>

@endsection
