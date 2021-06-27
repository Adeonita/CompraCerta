<header>
    <nav class='navbar navbar-light main w-100 d-flex justify-content-around'>
        <div>
            <a class='mx-2 col-sm-2 d-block d-sm-none logo-header' href="{{ url('/') }}">
                <img src="{{ asset('/images/logo-sm.png') }}" alt="CompraCerta" width="38" height="40">
            </a>
        </div>
        <div id='mainHeader' class='d-flex flex-row'>
            <p id='user-data'></p>
            <a type="button" class="btn btn-success" href="{{ url('/login') }}" id='btn-login'>
                <i class="bi bi-person-fill"></i> Entrar
            </a>
            <a href="{{ url('/createAccount') }}" class="btn btn-primary mx-1" id='btn-create'> <i
                    class="bi bi-person-plus-fill"></i>
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
        <img src="{{ asset('/images/logo.png') }}" alt="CompraCerta">
    </a>
    <div class='my-auto mx-2 row  col-sm-4 col-12'>
        <input type="text" class='form-control col' name="" id="">
        <button class="btn main main-btn col-4 col-sm-4"><i class="bi bi-search"></i> Buscar</button>
    </div>
</div>


<script>
    $(document).ready(function() {
        let user = getUser();
        if (user) {
            setLoggedHeader()
            $('#user-data').text('Olá, ' + user + "!");
        }
    });

    function getUser() {
        return localStorage.getItem('userName');
    }

    function logout() {
        localStorage.clear();
        window.location.href = '/';
    }

    function setLoggedHeader() {
        $('#mainHeader').html(
            `
            <p id='user-data' class='my-auto mx-2'></p>
            <a type="button" class="btn btn-success" href="{{ url('/profile') }}" id='btn-login'>
                <i class="bi bi-person-fill"></i> Meu Perfil
            </a>
            <a onclick="logout()" class="btn btn-danger mx-1" id='btn-create'> <i class="bi bi-person-x-fill"></i>
                Sair</a>
        `
        );
    }

</script>
