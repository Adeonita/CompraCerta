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
                                @for ($i = 0; $i < 5; $i++)
                                    <div class="historic-body mt-3">
                                        <div class="row user-panel-historic">
                                            <div class="col-md-11 control-panel">
                                                <div class="row user-panel-historic">
                                                    <div class="col-md-12 my-1">
                                                        <div class="pull-right">
                                                            <label class="label label-danger">Estado da Compra
                                                                <fieldset disabled>
                                                                    <div class="form-group">
                                                                        <select class="form-control"
                                                                            id="historicStateControl">
                                                                            <option id="complete">Finalizada</option>
                                                                            <option id="processing">Processando</option>
                                                                            <option id="canceled">Cancelada</option>
                                                                        </select>
                                                                    </div>
                                                                    <fieldset>
                                                            </label>
                                                        </div>
                                                        <p>Quantidade: 15, Valor: R$ 121.35</p>
                                                        <a data-placement="top" class="btn btn-info"
                                                            href="{{ url('/cart') }}" title="Repetir Compra"
                                                            id="btnRepetirCompra"><i class="bi bi-arrow-bar-up"></i></a>
                                                    </div>
                                                    <div class="col-md-12 historic-date">
                                                        <p>Entrega Feita em: 23/02/2021
                                                        <p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
