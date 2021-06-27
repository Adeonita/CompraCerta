@extends('index')
@section('content')

    <div class="mb-5">
        <div class="my-3">
            <h3>
                <i class="bi bi-cart-check-fill"></i> Meu Historico de Compras
            </h3>
        </div>
        <div class="col-md-3">
        </div>
        <form action="" class="form-control p-4">
            <table id="my-address" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Data</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Quantidade De itens</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td id="CartNameM">Nome Carrinho</td>
                            <td scope="row" id="CartDateM">
                                <div class="row">
                                    12/11/2021
                                </div>
                            </td>
                            <td id="CartValueM">R$ 43,62</td>
                            <td id="CartQuantM">12 itens</td>
                            <td id="UserAlterM">
                                <a class='btn btn-outline-success btn-sm mx-2 r-addres-button'
                                    href="{{ url('/cart') }}"><i class="bi bi-pencil-fill"></i></a>
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </form>
        <div class="menu-user mt-3">
            <a class='btn btn-warning mx-2 r-addres-button' href="{{ url('/user-profile') }}">
                Meu Perfil</a>
        </div>
    </div>

@endsection