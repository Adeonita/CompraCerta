<header>
    <nav class='navbar navbar-light main w-100 d-flex justify-content-around'>
        <div></div>
        <div>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#loginModal">
                <i class="bi bi-person-fill"></i> Entrar
            </button>
            <a href="{{ url('/createAccount') }}" class="btn btn-primary mx-1"> <i class="bi bi-person-plus-fill"></i>
                Criar uma conta</a>
        </div>
        <div>
            <a href="{{ url('/cart') }}" class="btn btn-secondary"> <i class="bi bi-cart"></i> </a>
        </div>
    </nav>
</header>
<div class='d-flex flex-row justify-content-center'>
    <a class='mx-2' href="{{ url('/') }}">
        <img src="./images/logo.png" alt="CompraCerta">
    </a>
    <div class='my-auto mx-2'>
        <input type="text" name="" id="">
        <button class="btn main"><i class="bi bi-search"></i> Buscar</button>
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
                        <input type="email" class="form-control" id="emailInput" placeholder="seuemail@examplo.com">
                    </div>
                    <div class="mb-3">
                        <label for="senhaUser" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="senhaUser" placeholder="">
                    </div>
                    <div class="mb-3 mx-auto">
                        <a href="{{ url('/recover') }}">Esqueci minha senha</a>
                    </div>
                    <div class=" w-100">

                        <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Login</button>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <a href={{ url('/createAccount') }} class='w-100'>
                    <button type="button" class="btn btn-outline-secondary w-100">Cadastrar</button>
                </a>
            </div>
        </div>
    </div>
</div>
