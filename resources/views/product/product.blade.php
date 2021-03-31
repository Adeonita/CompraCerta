@extends('index')
@section('content')
    <h2 id="productName">Coco Verde</h2>

    <div class="container">
        <div class="container">
            <img src="{{ asset('images/cocoVerde.jpeg') }}" alt="" class="rounded float-left">
        </div>
    </div>

    <div id="price">
    <h2>Por apenas</h2><br>
    <h4>R$ 2,25 a un.</h4>
    </div> 
    <div id="quant">
        <label for="quantity"><h5>Quantidade</h5></label>
        <input type="number" id="quantity" name="quantity" min="0" max="999" style="padding: 8px; border-radius: inherit;"><br><br>
    </div>

    <div id = "button-purchase">
    <button type="button" class="btn btn-success">
        <img src="icons/cart-plus.svg" alt="" width="30" height="30">
        <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>Comprar
    </button>
    </div>
@endsection