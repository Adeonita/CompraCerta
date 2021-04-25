<header>
    <nav class='navbar navbar-light main w-100 d-flex justify-content-around'>
        <div>
            <a class='mx-2 col-sm-2 d-block d-sm-none logo-header' href="{{ url('/') }}">
                <img src="./images/logo-sm.png" alt="CompraCerta" width="38" height="40">
            </a>
        </div>
        <div>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="bi bi-person-fill"></i> Entrar
            </button>
            <a href="{{ url('/createAccount') }}" class="btn btn-primary mx-1"> <i class="bi bi-person-plus-fill"></i>
                Criar uma conta</a>
        </div>
        <div class='d-inline'>
            <a href="{{ url('/navigation') }}" class="btn btn-warning d-sm-inline d-none mx-1"> <i
                    class="bi bi-cone"></i></i> </a>
            <a href="{{ url('/cart') }}" class="btn btn-secondary d-inline"> <i class="bi bi-cart"></i> </a>
        </div>
    </nav>
</header>

<div class='d-flex flex-row justify-content-center  my-4 mx-2 my-sm-1'>
    <a class='mx-2 col-sm-2 d-sm-block d-none' href="{{ url('/') }}">
        <img src="./images/logo.png" alt="CompraCerta">
    </a>
    <div class='my-auto mx-2 row  col-sm-4 col-12'>
        <input type="text" class='form-control col' name="" id="">
        <button class="btn main main-btn col-4 col-sm-4"><i class="bi bi-search"></i> Buscar</button>
    </div>
</div>


<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class='w-100'>
                    <h4 class='text-success text-center'>Bem-vindo!</h4>
                </div>
                <form>
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" placeholder="seuemail@examplo.com"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="senhaUser" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="passwordUser" placeholder="" required
                            minlength="6" maxlength="20">
                    </div>
                    <div class="mb-3 mx-auto">
                        <a href="{{ url('/recover') }}">Esqueci minha senha</a>
                    </div>
                    <div class=" w-100">

                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/createAccount') }}" class="btn btn-outline-secondary w-100">
                    Cadastrar
                </a>
            </div>
        </div>
    </div>
</div>
