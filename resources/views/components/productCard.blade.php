
<div class="row">
    @for($i = 0; $i < 20; $i++)
    <div class="card product-card mt-5 " style="width: 15rem;">
      <img class="card-img-top" src="{{ asset('images/feijao.png') }}" alt="Imagem de capa do card">
      <div class="card-body">
        <p class="card-text">Produto de teste</p>
      </div>
      <div class="row buttons-product-card">
            <a href="#" class="button-">Comprar</a>
            <a href="#" class="">Espiar</a>
      </div>
    </div>
    @endfor
</div>