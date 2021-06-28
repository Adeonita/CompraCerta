@extends('index')
@section('content')
    <div>

        <div class='w-100'>
            <h4 class='text-success text-center'>Bem-vindo!</h4>
        </div>
        <form id='login-post'>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="emailInput"
                    placeholder="seuemail@exemplo.com" value='teste@gmail.com' required>
            </div>
            <div class="mb-3">
                <label for="senhaUser" class="form-label">Senha</label>
                <input type="password" class="form-control" id="passwordUser" name="passwordUser" placeholder="" required
                    minlength="6" maxlength="20" value='123456'>
            </div>
            <div class="mb-3 mx-auto">
                <a href="{{ url('/recover') }}">Esqueci minha senha</a>
            </div>
            <div class=" w-100">
                <button type="submit" form='login-post' class="btn btn-primary w-100">Login</button>
            </div>

        </form>
    </div>

    <script src="{{ asset('js/login.js') }}"></script>
@endsection
