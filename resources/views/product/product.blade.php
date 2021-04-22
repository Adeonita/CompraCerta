@extends('index')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-6 mt-3">
      <img src="./images/feijao.png" alt="" class="product-img">
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-8 mt-3"><p class="product-name">Feijão Camil</p></div>
      </div>
      <div class="row">
        &nbsp; &nbsp;
        <h3><del>De 15,99</del></h3>
        <p class="product-price">Por apenas <br> R$ 10,99 a un.</p>
      </div>
      <div class="row mt-4">
       <div><label for="quantity" class="quant"><p>Quantidade</p></label>
            <input type="number" id="quantity" name="quantity" min="0" max="999" class= "quantBox">
       </div>
      </div>
      <div class="row mt-4">
        <div><button type="button" class="btn btn-success">
            <i class="bi bi-cart-check"></i> Comprar
            </button>
        </div>
      </div>    
    </div>
  </div>
</div>

@endsection