<header>
    <nav class='navbar navbar-light main w-100'>
        <div></div>
        <div>
            <a href="./login.html" class="btn btn-success"> Entrar</a>
            <a href='./criarconta.html'class="btn btn-primary"> Criar uma conta</a>
            <a href="{{ url('/cart') }}" class="btn btn-primary"> Meu Carrinho</a>
        </div>
        <div></div>
    </nav>
</header>
<div class='d-flex flex-row justify-content-center'>
    <a class='mx-2' href="{{ url('/home') }}">
        <img src="./images/logo.png" alt="CompraCerta" >
    </a>
    <div class='my-auto mx-2'>
        <input type="text" name="" id="">
        <button class="btn main">Buscar</button>
    </div>
</div>