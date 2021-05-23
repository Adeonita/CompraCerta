@extends('index')
@section('content')
    <div class='mb-5'>
        <div class='my-3'>
            <h3>
                <i class="bi bi-person-plus-fill"></i> Criar Conta
            </h3>
        </div>
        <div>
            <form class='form-control p-4' id='formRegister'>
                @csrf
                <h4 class='subtitle-form'>
                    Informações Pessoais
                </h4>
                <div class='container my-3 mx-auto'>
                    <div class="row mb-3 ">
                        <div class='col-12 col-sm mx-2'>
                            <label for="nameUserRegister" class="form-label">Nome</label>
                            <input type="text" class="form-control only-letter" id="nameUserRegister" required
                                minlength="3">
                        </div>
                        <div class="col-12 col-sm  mx-2">
                            <label for="lastNameUserRegister" class="form-label">Sobrenome</label><br>
                            <input type="text" class="form-control only-letter" id="lastNameUserRegister" required
                                minlength="3">
                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="birthUserRegister" class="form-label">Data de Nascimento</label><br>
                            <input type="date" class="form-control" id="birthUserRegister" placeholder="dd/mm/aaaa"
                                required>

                        </div>

                        <div class="col-12 col-sm mx-2">
                            <label for="cpfUserRegister" class="form-label">CPF</label><br>
                            <input type="text" class="form-control only-number" id="cpfUserRegister"
                                placeholder="___.___.___-__" required minlength='11' maxlength="11">
                            <div id="cpfHelp" class="form-text">* Apenas números.</div>

                        </div>
                    </div>
                    <div class='row mb-3 '>
                        <div class="col-12 col-sm mx-2">
                            <label for="emailUserRegister" class="form-label">Email</label><br>
                            <input type="email" class="form-control" id="emailUserRegister"
                                placeholder="seuemail@exemplo.com" required>
                        </div>
                        <div class="col-12 col-sm mx-2">
                            <label for="emailControlUserRegister" class="form-label">Confirme seu Email</label><br>
                            <input type="email" class="form-control" id="emailControlUserRegister"
                                placeholder="seuemail@exemplo.com" required>
                        </div>
                    </div>
                    <div class='row mb-3 '>

                        <div class="col-12 col-sm mx-2">
                            <label for="passwordUserRegister" class="form-label">Senha</label><br>
                            <input type="password" class="form-control" id="passwordUserRegister" minlength="6"
                                maxlength="20" required>
                            <div id="passwordHelp" class="form-text">* Senha precisa ter no mínimo 6 caracteres e no máximo
                                20.</div>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                        <div class="col-12 col-sm mx-2">
                            <label for="passwordControlUserRegister" class="form-label">Confirmar senha</label><br>
                            <input type="password" class="form-control" id="passwordControlUserRegister" minlength="6"
                                maxlength="20" required>
                        </div>

                    </div>
                    <div class='mx-2'>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="legalTerm" required>
                            <label class="form-check-label" for="legalTerm">
                                Li e concordo com os
                                <a href='' data-bs-toggle="modal" data-bs-target="#termsModal">
                                    termos de usos
                                </a>
                            </label>
                        </div>
                    </div>
                </div>

                <div class='d-flex flex-row-reverse'>
                    <button class='btn btn-success mx-2' id='btnRegister' type='submit'> <i class="bi bi-check"></i>
                        Cadastrar</button>
                    <a class='btn btn-outline-danger' a href="{{ url('/') }}"> <i class=" bi bi-x"></i>
                        Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Termos de Uso</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris auctor a risus vitae bibendum. Donec at
                    turpis ac tellus convallis ornare id in diam. Vestibulum non enim in mauris interdum vulputate. Integer
                    non egestas dolor. Nulla iaculis luctus felis mollis aliquet. Etiam at consequat quam. Fusce vitae porta
                    mauris, non finibus ante. Sed vitae urna gravida leo tempor venenatis sit amet quis ipsum. Vivamus sit
                    amet posuere velit. Proin feugiat venenatis lectus ac accumsan. Vestibulum et velit blandit, tempus dui
                    pretium, fringilla neque. Ut rhoncus ligula et fermentum auctor. Fusce nec lorem ex.

                    Donec sed vulputate nulla. Praesent vel turpis pretium arcu consectetur iaculis. Nulla dictum interdum
                    eros, at volutpat lectus tincidunt a. Mauris in porttitor justo. Cras hendrerit tempor leo, sed
                    dignissim metus iaculis ac. Pellentesque bibendum et sem sed consectetur. Nunc arcu tellus, dapibus nec
                    laoreet vel, efficitur a odio. Sed vel pharetra arcu. Nunc nec mattis diam. Duis odio nisi, ultricies
                    nec dui semper, elementum porta ante. Duis lacinia commodo luctus. Mauris tristique purus quis justo
                    sagittis volutpat. Ut rutrum, massa sed varius laoreet, enim nunc ultricies orci, sit amet pulvinar
                    turpis nibh sit amet leo.

                    Aenean cursus ante ligula, in ullamcorper est gravida quis. Aenean eget varius nisi. Nullam euismod
                    laoreet fermentum. Morbi in augue rutrum lorem pretium convallis vel id eros. Nullam quam risus, finibus
                    suscipit dapibus nec, ullamcorper sit amet nunc. Fusce mollis rutrum volutpat. Orci varius natoque
                    penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed pulvinar semper volutpat.
                    Curabitur iaculis erat ac massa lacinia pharetra. Nunc lacus neque, euismod at augue ac, pretium sodales
                    sapien. Suspendisse ut ultricies lorem. In lacinia tempor nisi, et blandit ex laoreet sit amet.
                    Pellentesque vitae libero magna.

                    Aliquam erat volutpat. In nec tortor at nulla accumsan rutrum sed ut tellus. Mauris id malesuada magna.
                    Ut efficitur velit eget justo euismod dictum. Morbi aliquam sed urna vitae ultricies. Nullam venenatis
                    varius nisi, eu accumsan lacus rutrum quis. Vivamus sed odio non neque consectetur iaculis. Mauris
                    viverra metus risus, non volutpat nisl eleifend non.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i
                            class=" bi bi-x"></i>Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/createAccount.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>
@endsection
