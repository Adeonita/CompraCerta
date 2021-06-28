@extends('index')
@section('content')

    <div class="mb-5">
        <div class="my-3">
            <h3>
                <i class="bi bi-book-half"></i> Meus Endereços
            </h3>
        </div>
        <div class="col-md-3">
        </div>
        <form action="" class="form-control p-4">
            <table id="address-table" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Número do CEP</th>
                        <th scope="col">Rua</th>
                        <th scope="col">Numero</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Complemento</th>
                        <th scope="col">Editar</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </form>
        <div class="menu-user mt-3">
            <a class='btn btn-warning mx-2 r-addres-button' href="{{ url('/user-profile') }}">
                Meu Perfil</a>
            <a class='btn btn-primary mx-2 r-addres-button' href="{{ url('/address-option') }}">Adicionar Endereço</a>
        </div>
    </div>
    <script src="{{ asset('js/userAddressess.js') }}"></script>
@endsection
