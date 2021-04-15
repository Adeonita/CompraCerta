@extends('index')
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-md-8"><p class="productName">Feijão Camil</p></div>

    <div class="col-md-4 mt-6"><p class="productPrice">Por apenas <br> R$ 2,25 a un.</p></div>
    </div>
</div>

    <div>
        <div class="container">
            <img src="./images/product.svg" alt="" class="rounded float-left">
        </div>
    </div>

    <div class="container px-4">
        <div class="row">
            <div class=" offset-8 col-md-2"><label for="quantity" class="quant"><p>Quantidade</p></label>
                <input type="number" id="quantity" name="quantity" min="0" max="999" style="padding: 1px; border-radius: inherit;"><br><br>
            </div>
            <div class="col-md-2"><button type="button" class="btn btn-success">
                <i class="bi bi-cart-check"></i> Comprar
                </button>
            </div>
        </div>
    </div>

@endsection