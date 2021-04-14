@extends('index')
@section('content')
    <div class="row mb-3">
        <div class="col-6">
            <form class='form-control p-4 mt-5 mb-5'>
                <h4 class='subtitle-form'>
                    Dados de pagamento
                </h4>
                <div class='container my-3 mx-auto'>
                    <div class="row mb-3 ">
                        <div class='col-12 col-sm mx-2'>
                            <label for="name-credit-card" class="form-label">Nome no cartão</label>
                            <input required type="text" class="form-control only-letter" id="name-credit-card">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm  mx-2">
                            <label for="credit-card-number" class="form-label">Número do cartão</label><br>
                            <input required type="text" class="form-control only-number" id="credit-card-number">
                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="due-date-creditcard" class="form-label">Data de vencimento</label><br>
                            <input required type="month" class="form-control" id="due-date-creditcard" placeholder="mm/aaaa">
                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="credit-card-code" class="form-label">Código do cartão</label><br>
                            <input required type="text" class="form-control only-number" id="credit-card-code" placeholder="">
                        </div>
                    </div>            
                    <div class='mx-2 mt-5'>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="store-credit-card-data">
                            <label class="form-check-label" for="store-credit-card-data">
                                Armazenar dados para comprar futuras
                            </label>
                        </div>
                    </div>
                </div>
                <div class='d-flex flex-row-reverse'>
                    <button class='btn btn-success mx-2'> <i class="bi bi-check"></i> Cadastrar</button>
                    <a class='btn btn-outline-danger' a href="{{ url('/') }}"> <i class=" bi bi-x"></i>
                        Cancelar</a>
                </div>
            </form>
        </div>
        <div class="col-6 mt-5 mb-5 ">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title mb-3" id="card-title">Total do Pedido</h5>
            </div>
            <div class='d-flex mb-3' id="final-price">
                <label class="card-text"> R$ 250,00</label>
                <button class='btn btn-success btn-sm mx-2'> Pagar </button>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <!-- <script src="{{ asset('js/creditCard.js') }}"></script> -->
@endsection
