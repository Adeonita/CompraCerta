@extends('index')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8"><p class="product-name">Feijão Camil</p></div>

    <div class="col-md-4 mt-6"><p class="product-price">Por apenas <br> R$ 10,99 a un.</p></div>
    </div>
</div>

    <div class = "container">
        <div class="row">
            <div class = "col-md-10">
                <img src="./images/feijao.png" alt="" class="product-img">
            </div>
            <div class="offset-8 col-md-2"><label for="quantity" class="quant"><p>Quantidade</p></label>
                <input type="number" id="quantity" name="quantity" min="0" max="999" style="padding: 1px; border-radius: inherit;"><br><br>
            </div>
            <div class="col-md-2"><button type="button" class="btn btn-success">
                <i class="bi bi-cart-check"></i> Comprar
                </button>
            </div>
        </div>
    </div>

@endsection