@extends('index')
@section('content')
    <div class='mb-5'>
        <div class='my-3'>
            <h3>
                <i class="bi bi-person-plus-fill"></i> Criar Conta
            </h3>
        </div>
        <div>

            <form class='form-control p-4'>
                <h4 class='subtitle-form'>
                    Informações Pessoais
                </h4>
                <div class='container my-3 mx-auto'>
                    <div class="row mb-3 ">
                        <div class='col-12 col-sm mx-2'>
                            <label for="nameUserRegister" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nameUserRegister">
                        </div>
                        <div class="col-12 col-sm  mx-2">
                            <label for="lastNameUserRegister" class="form-label">Sobrenome</label><br>
                            <input type="text" class="form-control" id="lastNameUserRegister">
                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="birthUserRegister" class="form-label">Data de Nascimento</label><br>
                            <input type="date" class="form-control" id="birthUserRegister" placeholder="dd/mm/aaaa">
                        </div>

                        <div class="col-12 col-sm mx-2">
                            <label for="cpfUserRegister" class="form-label">CPF</label><br>
                            <input type="text" class="form-control" id="cpfUserRegister" placeholder="___.___.___-__">
                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="emailUserRegister" class="form-label">Email</label><br>
                            <input type="email" class="form-control" id="emailUserRegister"
                                placeholder="seuemail@exemplo.com">
                        </div>
                        <div class="col-12 col-sm mx-2">
                            <label for="emailControlUserRegister" class="form-label">Confirme seu Email</label><br>
                            <input type="email" class="form-control" id="emailControlUserRegister"
                                placeholder="seuemail@exemplo.com">
                        </div>
                    </div>
                    <div class='row mb-3 '>

                        <div class="col-12 col-sm mx-2">
                            <label for="passwordUserRegister" class="form-label">Senha</label><br>
                            <input type="password" class="form-control" id="passwordUserRegister">
                        </div>

                        <div class="col-12 col-sm mx-2">
                            <label for="passwordControlUserRegister" class="form-label">Confirmar senha</label><br>
                            <input type="password" class="form-control" id="passwordControlUserRegister">
                        </div>

                    </div>
                    <div class='mx-2'>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="legalTerm">
                            <label class="form-check-label" for="legalTerm">
                                Li e concordo com os termos de uso
                            </label>
                        </div>
                    </div>
                </div>


                <div>
                    <h4 class='subtitle-form'>Endereço de Entrega</h4>
                </div>

                <div class='container'>

                    <div class='col-12 col-sm-3 mb-3 me-2'>
                        <label for="cepUserRegister" class="form-label">CEP</label><br>
                        <input type="text" class="form-control" id="cepUserRegister">
                    </div>


                    <div class='row mb-3 '>
                        <div class="col-12 col-sm-10 ">
                            <label for="streetUserRegister" class="form-label">Rua</label><br>
                            <input type="text" class="form-control" id="streetUserRegister">
                        </div>

                        <div class="col-12 col-sm">
                            <label for="numberUserRegister" class="form-label">Número</label><br>
                            <input type="text" class="form-control" id="numberUserRegister">
                        </div>
                    </div>

                    <div class='row mb-3'>
                        <div class="col-12 col-sm ">
                            <label for="districtUserRegister" class="form-label">Bairro</label><br>
                            <input type="text" class="form-control" id="districtUserRegister">
                        </div>

                        <div class="col-12 col-sm mx-1">
                            <label for="cityUserRegister" class="form-label">Cidade</label><br>
                            <input type="text" class="form-control" id="cityUserRegister">
                        </div>

                        <div class="col-12 col-sm mx-1">
                            <label for="stateUserRegister" class="form-label">Estado</label><br>
                            <input type="text" class="form-control" id="stateUserRegister">
                        </div>
                    </div>

                    <div class='mb-3 w-100'>
                        <label for="complementUserRegister" class="form-label">Complemento</label><br>
                        <input type="text" class="form-control" id="complementUserRegister">
                    </div>

                </div>

                <div class='d-flex flex-row-reverse'>
                    <button class='btn btn-success mx-2'> <i class="bi bi-check"></i> Cadastrar</button>
                    <button class='btn btn-outline-danger'> <i class="bi bi-x"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
