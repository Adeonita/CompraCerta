@extends('index')
@section('content')

    <div class="mt-4">
        <p class="delivery-question">Em qual endereço você deseja receber sua compra ?<p>
    </div>

    <div class='container'>

        <div class='col-12 col-sm-3 mb-3 me-2'>
            <label for="cepUserRegister" class="form-label">CEP</label><br>
            <input type="text" class="form-control only-number" id="cepUserRegister" required minlength='8'
                maxlength="8">
            <div id="passwordHelp" class="form-text">* Apenas números.</div>
        </div>


        <div class='row mb-3 '>
            <div class="col-12 col-sm-10 ">
            <label for="streetUserRegister" class="form-label">Rua</label><br>
            <input type="text" class="form-control" id="streetUserRegister" required>
            </div>

            <div class="col-12 col-sm">
            <label for="numberUserRegister" class="form-label">Número</label><br>
            <input type="text" class="form-control only-number" id="numberUserRegister" required>
            </div>
        </div>

        <div class='row mb-3'>
            <div class="col-12 col-sm ">
            <label for="districtUserRegister" class="form-label">Bairro</label><br>
            <input type="text" class="form-control" id="districtUserRegister" required>
            </div>

            <div class="col-12 col-sm">
                <label for="cityUserRegister" class="form-label">Cidade</label><br>
                <input type="text" class="form-control" id="cityUserRegister" required>
            </div>

            <div class="col-12 col-sm">
            <label for="stateUserRegister" class="form-label">Estado</label><br>
            <input type="text" class="form-control" id="stateUserRegister" required>

            </div>
        </div>

            <div class='mb-3 w-100'>
            <label for="complementUserRegister" class="form-label">Complemento</label><br>
            <input type="text" class="form-control" id="complementUserRegister">
            
    </div>

    <div class='d-flex flex-row-reverse'>
        <a href="{{ url('/payment') }}" class="btn btn-success btn-sm"><i class="bi bi-check"></i> Continuar para pagamento</a>
    </div>
    
    </div>

    <div class="ms-2 my-4">
         <a href="{{ url('/') }}" class="btn btn-primary btn-sm"><i class="bi bi-bag"></i> Continuar Comprando</a>    
    </div>

@endsection