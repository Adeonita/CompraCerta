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
            <table id="my-address" class="table table-hover">
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
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td id = "UserCepM">45912643</td>
                            <td scope="row" id = "UserStreetM">
                                <div class="row">
                                    Rua das Violetas Cabral
                                </div>
                            </td> 
                            <td id = "UserNumberM">142</td>            
                            <td id = "UserNeighM">Acupe de Brotas</td>
                            <td id = "UserCityM">Salvador</td>
                            <td id = "UserStateM">Bahia</td>
                            <td id = "UserComplementM">Em frente a padaria Doce de Mel</td>
                            <td id = "UserAlterM">
                                <a class='btn btn-outline-success btn-sm mx-2 r-addres-button' href="{{ url('/address-option') }}"><i class="bi bi-pencil-fill"></i></a>
                            </td>                     
                        </tr>
                    @endfor
                </tbody>
            </table>
        </form>
        <div class="menu-user mt-3">
            <a class='btn btn-warning mx-2 r-addres-button' href="{{ url('/user-profile') }}">Meu Perfil</a>
            <a class='btn btn-primary mx-2 r-addres-button' href="{{ url('#') }}">Adicionar Endereço</a>
        </div>
</div>










@endsection
