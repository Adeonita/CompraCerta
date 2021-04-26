@extends('index')
@section('content')

    <div class="mt-4">
        <p class="delivery-question">Em qual endereço você deseja receber sua compra ?<p>
    </div>

    <form class='form-control p-4' id="address-form">
        <div class='container'>
            <div class='col-12 col-sm-3 mb-3 me-2'>   
                <label for="cepUserRegister" class="form-label">CEP</label>
                <input required type="text" class="form-control only-number" id="cepUserRegister" maxlength="8">
            </div>


            <div class='row mb-3'>
                <div class="col-12 col-sm-10 ">
                    <label for="streetUserRegister" class="form-label">Rua</label><br>
                    <input required type="text" class="form-control" id="streetUserRegister">
                </div>

                <div class="col-12 col-sm">
                    <label for="numberUserRegister" class="form-label">Número</label><br>
                    <input required type="text" class="form-control only-number" id="numberUserRegister" required>
                </div>
            </div>

            <div class='row mb-3'>
                <div class="col-12 col-sm ">
                    <label for="districtUserRegister" class="form-label">Bairro</label><br>
                    <input required type="text" class="form-control" id="districtUserRegister" required>
                </div>

                <div class="col-12 col-sm">
                    <label for="cityUserRegister" class="form-label">Cidade</label><br>
                    <input required type="text" class="form-control only-letter" id="cityUserRegister" required>
                </div>

                <div class="col-12 col-sm">
                    <label for="stateUserRegister" class="form-label">Estado</label><br>
                    <div class="form-group col-6" id="stateUserRegister">
                        <select class="form-control" id="states">
                        <option value="acre">Acre</option>
                        <option value="alagoas">Alagoas</option>
                        <option value="amapa">Amapá</option>
                        <option value="amazonas">Amazonas</option>
                        <option value="bahia">Bahia</option>
                        <option value="ceara">Ceará</option>
                        <option value="distritoFederal">Distrito Federal</option>
                        <option value="espiritoSanto">Espírito Santo</option>
                        <option value="goias">Goiás</option>
                        <option value="maranhao">Maranhão</option>
                        <option value="matoGrosso">Mato Grosso</option>
                        <option value="matoGrossoDoSul">Mato Grosso Do Sul</option>
                        <option value="minasGerais">Minas Gerais</option>
                        <option value="para">Pará</option>
                        <option value="paraiba">Paraíba</option>
                        <option value="pernambuco">Pernambuco</option>
                        <option value="piaui">Piauí</option>
                        <option value="rioDeJaneiro">Rio de Janeiro</option>
                        <option value="rioGrandeDoSul">Rio Grande do Sul</option>
                        <option value="rondonia">Rondônia</option>
                        <option value="roraima">Roraima</option>
                        <option value="santaCatarina">Santa Catarina</option>
                        <option value="saoPaulo">São Paulo</option>
                        <option value="sergipe">Sergipe</option>
                        <option value="tocantins">Tocantins</option>
                        </select>
                    </div>
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
    </form>

    <div class="ms-2 my-4">
         <a href="{{ url('/') }}" class="btn btn-primary btn-sm"><i class="bi bi-bag"></i> Continuar Comprando</a>    
    </div>

<script src="{{ asset('js/helpers.js') }}"></script>

@endsection
