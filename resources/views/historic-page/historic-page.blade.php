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
                <div class="menu-user mt-3">
                    <a class="navbar-brand" href="{{ url('/profile') }}">Pagina Usuario</a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="profile-content">
                <form class='form-control p-2'>
                    <h3>
                        <i class="bi bi-hourglass-split"></i> Histórico de Compras
                    </h3>
                    <div class="container bootdey mb-5">
                        <div class="painel painel-default history-screen">
                            <table id="myHistoric" class="table table">

                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/history.js') }}"></script>

@endsection
