@include('helpers-php')
@extends('index')
@section('content')
    <div class="row justify-content-around">
        @foreach ($products as $item)
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
    </div>
@endsection
