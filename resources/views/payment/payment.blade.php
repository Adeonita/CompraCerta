@extends('index')
@section('content')
    <div>
        <form class='form-control p-4 mt-5 mb-5'>
            <h4 class='subtitle-form'>
                Dados de pagamento
            </h4>
            <div class='container my-3 mx-auto'>
                <div class="row mb-3 ">
                    <div class='col-12 col-sm mx-2'>
                        <label for="name-credit-card" class="form-label">Nome no cartão</label>
                        <input type="text" class="form-control" id="name-credit-card">
                    </div>
                    <div class="col-12 col-sm  mx-2">
                        <label for="credit-card-number" class="form-label">Número do cartão</label><br>
                        <input type="text" class="form-control" id="credit-card-number">
                    </div>
                </div>
                <div class='row mb-3 '>
                    <div class="col-12 col-sm mx-2">
                        <label for="due-date-creditcard" class="form-label">Data de vencimento</label><br>
                        <input type="date" class="form-control" id="due-date-creditcard" placeholder="dd/mm/aaaa">
                    </div>

                    <div class="col-12 col-sm mx-2">
                        <label for="credit-card-code" class="form-label">Código do cartão</label><br>
                        <input type="text" class="form-control" id="credit-card-code" placeholder="">
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
@endsection
