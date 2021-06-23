@extends('index')
@section('content')
    <div class="row justify-content-around">
        @for ($i = 0; $i < count($products); $i++)
            <div class="card product-card col-xs-6 col-sm-4 col-md-4 col-lg-4 px-auto mb-4 mx-2 " style="width: 15rem;">
                <a href="{{ url('/product') }}">
                    <div>
                        <img class="card-img-top" src="{{ asset('images/feijao.png') }}" alt="Imagem de capa do card">
                        <div class='price-tags d-flex flex-column align-items-start'>
                            <p class="badge main">R$ {{ $products[$i]['price'] }}</p>
                        </div>
                    </div>
                </a>
                <div class="card-body">
                    <p class="card-text">{{ $products[$i]['name'] }}</p>
                </div>
                <div class="row buttons-product-card">
                    <a href="{{ url('/product') }}" class="btn main main-btn">Comprar</a>               
                </div>
            </div>
        @endfor
    </div>    
@endsection
