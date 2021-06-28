@extends('index')
@section('content')
    <div class='mb-5'>
        <div class="my-3">
            <h3>
                <i class="bi bi-house"></i> Endereço
            </h3>
        </div>
        <div class='form-control'>
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
                        <th scope="col">Escolher</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </div>

        <div class="ms-2 my-4">
            <a href="{{ url('/my-address') }}" class="btn btn-primary btn-sm"><i class="bi bi-house"></i> Meus
                Endereços</a>
        </div>
    </div>

    <script src="{{ asset('js/addressSelection.js') }}"></script>

@endsection
