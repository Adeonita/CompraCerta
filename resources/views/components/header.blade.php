<header>
    <nav class='navbar navbar-light main w-100 d-flex justify-content-around'>
        <div></div>
        <div>
            <a href="" class="btn btn-success mx-1"> <i class="bi bi-person-plus-fill"></i> Entrar</a>
            <a href="{{ url('/createAccount') }}"class="btn btn-primary mx-1"> <i class="bi bi-person-plus-fill"></i> Criar uma conta</a>
        </div>
        <div>
            <a href="{{ url('/cart') }}" class="btn btn-secondary"> <i class="bi bi-cart"></i> </a>
        </div>
    </nav>
</header>
<div class='d-flex flex-row justify-content-center'>
    <a class='mx-2' href="{{ url('/home') }}">
        <img src="./images/logo.png" alt="CompraCerta" >
    </a>
    <div class='my-auto mx-2'>
        <input type="text" name="" id="">
        <button class="btn main"><i class="bi bi-search"></i> Buscar</button>
    </div>
</div>
