@extends('index')
@section('content')
    <div class='my-4'>
        <form class='form-control p-4' name='formRecover' onSubmit="return(validateRecover())">
            <h4 class='subtitle-form'>
                <i class="bi bi-lock"></i>
                Recuperar Senha
            </h4>
            <div class='container my-3 mx-auto'>
                <div class="row mb-3 ">
                    <div class="col-12 col-sm mx-auto">
                        <label for="emailUserRecover" class="form-label">Email</label><br>
                        <input type="email" class="form-control" id="emailUserRecover" placeholder="seuemail@exemplo.com"
                            required>
                    </div>

                    <div class="col-12 col-sm mx-2">
                        <label for="emailUserRecoverControl" class="form-label">Confirme seu Email</label><br>
                        <input type="email" class="form-control" id="emailUserRecoverControl"
                            placeholder="seuemail@exemplo.com">
                    </div>
                </div>
                <div class='d-flex flex-row-reverse'>
                    <button class='btn main main-btn mx-2'> <i class="bi bi-check"></i> Recuperar</button>
                </div>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/recoverPassword.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>

@endsection
