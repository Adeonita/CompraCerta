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

<script src="{{ asset('js/alterProfile.js') }}"></script>
<script src="{{ asset('js/helpers.js') }}"></script>

@endsection
