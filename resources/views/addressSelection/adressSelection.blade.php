@extends('index')
@section('content')

<h5 id="DeliveryQuestion">Como deseja receber sua compra ?</h5>
    <br>
    <div id = "buttonHome">
        <button type="button" class="btn btn-outline-primary">
            <img src="icons/truck.svg" alt="" width="75" height="60">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            <br>
            Entrega
        </button>
    </div>
    <div id = "buttonWithdrawal">
        <button type="button" class="btn btn-outline-warning">
            <img src="icons/shop.svg" alt="" width="75" height="60">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            <br>
            Retirada
        </button>
    </div>
    <br><br><br><br><br>
    <h5 id="AdressQuestion" class="text-center">Qual endereço para a entrega ?</h5>
    <br>
    
    <div id="RegistredAdress">
        <h5>Principal - (Endereço)</h5>

        <div class="form-group">
            <label for="formGroupExampleInput"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Dados do endereço">
        </div>
        <br>
        <button type="button" class="btn btn-outline-success">Selecionar</button>
    </div>

    <br>
    
    <div id="NewAdress">
        <button type="button" class="btn btn-outline-primary">Adicionar endereço</button>
    </div>

    <div id="BackToHome">
        <button type="button" class="btn btn-primary">
            <img src="icons/bag.svg" alt="" width="40" height="30">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            Continuar Comprando
        </button>
    </div>


@endsection