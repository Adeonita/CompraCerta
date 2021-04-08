<div class="row justify-content-around">
    @for ($i = 0; $i < 20; $i++)
        <div class="card product-card col-xs-6 col-sm-4 col-md-4 col-lg-4 px-auto mb-4 mx-2 " style="width: 15rem;">
            <a href="#">
                <div>
                    <img class="card-img-top" src="{{ asset('images/feijao.png') }}" alt="Imagem de capa do card">
                    <p class="badge price-tag main">R$ 10,99</p>
                </div>
            </a>
            <div class="card-body">
                <p class="card-text">Produto de teste</p>
            </div>
            <div class="row buttons-product-card">
                <a href="#" class="btn main main-btn">Comprar</a>
            </div>
        </div>
    @endfor
</div>
