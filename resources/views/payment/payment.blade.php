@extends('index')
@section('content')
    <div class="row mb-3">
        <div class="col-6">
            <form action="/payment" method="POST" class='form-control p-4 mt-5 mb-5'>
                @csrf
                <h4 class='subtitle-form'>
                    Dados de pagamento
                </h4>
                <div class='container my-3 mx-auto'>
                    <div class="row mb-3 ">
                        <div class='col-12 col-sm mx-2'>
                            <label for="name-credit-card" class="form-label">Nome no cartão</label>
                            <input required name="nameUser" type="text" class="form-control only-letter" id="name-credit-card">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm  mx-2">
                            <label for="credit-card-number" class="form-label">Número do cartão</label><br>
                            <input required name="number" type="text" class="form-control only-number" id="credit-card-number" maxlength="16">
                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="due-date-creditcard" class="form-label">Data de vencimento</label><br>
                            <input required name="dueDate" type="month" class="form-control" id="due-date-creditcard" placeholder="mm/aaaa">
                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="credit-card-code" class="form-label">Código do cartão</label><br>
                            <input required name="cvv" type="text" class="form-control only-number" id="credit-card-code" maxlength="3">
                        </div>
                    </div>        
                    <input type="hidden" name="cart" id="cart"/>
                    <input type="hidden" name="user_id" id="user_id"/>    
                </div>
                <div class='d-flex flex-row-reverse'>
                    <button type="submit" class='btn btn-success mx-2'>
                        <i class="bi bi-check"></i> Pagar
                    </button>
                    <a class='btn btn-outline-danger' a href="{{ url('/') }}"> <i class=" bi bi-x"></i>
                        Cancelar</a>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/helpers.js') }}"></script>
    <script src="{{ asset('js/creditCard.js') }}"></script>
    <script src="{{ asset('js/payment.js') }}"></script>
@endsection
