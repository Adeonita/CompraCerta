@include('helpers-php')
@extends('index')
@section('content')
    <h1 class="text-center">Semana de Inauguração</h1>
    <div class="row justify-content-around mt-5">
        <h2>Carnes</h2>
        @foreach ($meat as $item)
            <div class="card product-card col-xs-6 col-sm-4 col-md-4 col-lg-4 px-auto mb-4 mx-2 " style="width: 15rem;">
                <a href='{{ url("/product/$item->id") }}'>
                    <div>
                        <img class="card-img-top" src='{{ asset("images/products/$item->imagePath") }}'
                            alt="Imagem de capa do card">
                        <div class='price-tags d-flex flex-column align-items-start'>
                            <p class="badge main">R$ {{ formatMoney($item->price) }}</p>
                        </div>
                    </div>
                </a>
                <div class="card-body">
                    <p class="card-text">{{ $item->name }}</p>
                </div>
                <div class="row buttons-product-card">
                    <a href='{{ url("/product/$item->id") }}' class="btn main main-btn">Comprar</a>
                </div>
            </div>
        @endforeach
        <hr>
    </div>
    <div class="row justify-content-around mt-5">
        <h2>Congelados</h2>
        @foreach ($frozen as $item)
            <div class="card product-card col-xs-6 col-sm-4 col-md-4 col-lg-4 px-auto mb-4 mx-2 " style="width: 15rem;">
                <a href='{{ url("/product/$item->id") }}'>
                    <div>
                        <img class="card-img-top" src='{{ asset("images/products/$item->imagePath") }}'
                            alt="Imagem de capa do card">
                        <div class='price-tags d-flex flex-column align-items-start'>
                            <p class="badge main">R$ {{ formatMoney($item->price) }}</p>
                        </div>
                    </div>
                </a>
                <div class="card-body">
                    <p class="card-text">{{ $item->name }}</p>
                </div>
                <div class="row buttons-product-card">
                    <a href='{{ url("/product/$item->id") }}' class="btn main main-btn">Comprar</a>
                </div>
            </div>
        @endforeach
        <hr>
    </div>
    <div class="row justify-content-around mt-5">
        <h2>Cereais</h2>
        @foreach ($cereals as $item)
            <div class="card product-card col-xs-6 col-sm-4 col-md-4 col-lg-4 px-auto mb-4 mx-2 " style="width: 15rem;">
                <a href='{{ url("/product/$item->id") }}'>
                    <div>
                        <img class="card-img-top" src='{{ asset("images/products/$item->imagePath") }}'
                            alt="Imagem de capa do card">
                        <div class='price-tags d-flex flex-column align-items-start'>
                            <p class="badge main">R$ {{ formatMoney($item->price) }}</p>
                        </div>
                    </div>
                </a>
                <div class="card-body">
                    <p class="card-text">{{ $item->name }}</p>
                </div>
                <div class="row buttons-product-card">
                    <a href='{{ url("/product/$item->id") }}' class="btn main main-btn">Comprar</a>
                </div>
            </div>
        @endforeach
        <hr>
    </div>
@endsection
