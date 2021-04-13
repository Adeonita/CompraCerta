@extends('index')
@section('content')

<p id="DeliveryQuestion">Como deseja receber sua compra ?<p>

    <div class="buttonHome">
        <button type="button" class="btn btn-outline-primary">
            <img src="icons/truck.svg" alt="" width="75" height="60">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            <p>Entrega</p>
        </button>
    </div>

    <div class="buttonWithdrawal">
        <button type="button" class="btn btn-outline-warning">
            <img src="icons/shop.svg" alt="" width="75" height="60">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            <p>Retirada</p>
        </button>
    </div>
    
    <p id="AdressQuestion" class="text-center">Qual endereço para a entrega ?</p>
  
    <div class="RegistredAdress">
        <p style="font-size:larger;">Principal - (Endereço)</p>

        <div class="form-group">
            <label for="formGroupExampleInput"></label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Dados do endereço">
        </div>
       
        <button id="selectAdress" type="button" class="btn btn-outline-success">Selecionar</button>
    </div>
    
    <div class="NewAdress">
        <button type="button" class="btn btn-outline-primary">Adicionar novo endereço</button>
    </div>

    <div class="BackToHome">
        <button type="button" class="btn btn-primary">
            <img src="icons/bag.svg" alt="" width="40" height="30">
            <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
            Continuar Comprando
        </button>
    </div>

@endsection