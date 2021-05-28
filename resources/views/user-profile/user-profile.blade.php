@extends('index')
@section('content')

   
    <div class="row profile">
		<div class="col-md-3">
			<div>
				<div class="profile-userpic mt-3">
					<img src="./images/user.png" class="img-responsive" alt="">           
				</div>

                <div class="profile-usertitle-name pl-4 mt-2">
					Usuário Compra Certa
				</div>
                <div class="menuUser mt-3">
                    <a class="navbar-brand" href="" data-bs-toggle="modal" data-bs-target="#pChagingModal">Trocar Senha</a><br>
                    <a class="navbar-brand" href="{{ url('/historic-page') }}">Historico</a>
                </div>
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
                <form class='form-control p-4' onSubmit="return(validateRegister())">
                    <h4 class='subtitle-form'>
                        Perfil do Usuário
                    </h4>
                            <fieldset id="formProfile" disabled>
                                <div class='container my-3 mx-auto'>
                                    <div class="row mb-3 ">
                                        <div class='col-12 col-sm mx-2'>
                                            <label for="nameUserProfile" class="form-label">Nome</label>
                                            <input type="text" class="form-control only-letter" id="nameUserProfile" value="João das Neves">
                                        </div>
                                        <div class="col-12 col-sm  mx-2">
                                            <label for="lastNameUserProfile" class="form-label">Sobrenome</label><br>
                                            <input type="text" class="form-control only-letter" id="lastNameUserProfile" required
                                                minlength="3" value="Vulgo Targaryen">
                                        </div>
                                    </div>
                                    <div class='row mb-3 '>
                                        <div class="col-12 col-sm mx-2">
                                            <label for="birthUserProfile" class="form-label">Data de Nascimento</label><br>
                                            <input type="date" class="form-control" id="birthUserProfile" placeholder="dd/mm/aaaa"
                                                required value='2017-06-01'>
                                        </div>

                                        <div class="col-12 col-sm mx-2">
                                            <label for="cpfUserProfile" class="form-label">CPF</label><br>
                                            <input type="text" class="form-control only-number" id="cpfUserProfile"
                                                placeholder="___.___.___-__" required minlength='11' maxlength="11" value="12345678910">
                                        </div>
                                    </div>
                                    <div class='row mb-3 '>
                                        <div class="col-12 col-sm mx-2">
                                            <label for="emailUserProfile" class="form-label">Email</label><br>
                                            <input type="email" class="form-control" id="emailUserProfile"
                                                placeholder="seuemail@exemplo.com" required value="JoãodeNadaSabe@gmail.com">
                                        </div>
                                    </div>

                                    <div class='d-flex flex-row'>
                                        <a class='btn btn-success mx-2' id="btnProfileConfi">Confirmar</a>

                                        <a class='btn btn-danger mx-2' id="btnProfileConfi" onclick="disableForm()">Cancelar</a>
                                    </div>
                            </fieldset>

                        <div class='d-flex flex-row-reverse'>
                            <a class='btn btn-warning mx-2' id="btnProfile" onclick="disableForm()"><i class="bi bi-bootstrap-reboot"></i>
                            Alterar Dados</a>
                        </div>  
                </form>    
            </div>
		</div>
	</div>

    <div class="modal fade" id="pChagingModal" tabindex="-1" aria-labelledby="pChagingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pChagingModalLabel">Trocar Senha</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" onSubmit="return(validatePassoword())">
                    <form>
                        <div class="mb-3">
                            <label for="passwordActual" class="form-label">Senha Atual</label>
                            <input type="password" class="form-control" id="passwordActual" placeholder="Senha Atual"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Nova Senha</label>
                            <input type="password" class="form-control" id="newPassword" placeholder="Senha" required
                                minlength="6" maxlength="20">
                        </div>

                        <div class="mb-3">
                            <label for="newPasswordCheck" class="form-label">Repita a Nova Senha</label>
                            <input type="password" class="form-control" id="newPasswordCheck" placeholder="Confirme Senha" required
                                minlength="6" maxlength="20">
                        </div>
                
                        <div class=" w-100">

                            <button type="submit" class="btn btn-success w-100">Cadastrar Nova Senha</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="{{ asset('js/alterProfile.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>
<script src="{{ asset('js/createAccount.js') }}"></script>

@endsection
