@extends('index')
@section('content')
    <div class="mb-5">
        <div class="my-3">
            <h3>
                <i class="bi bi-gear"></i> Back Office
            </h3>
        </div>
        <form action="" class="form-control p-4">
            <table id="my-cart" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Número da compra</th>
                        <th scope="col">Dados do cliente</th>
                        <th scope="col">Status da compra</th>
                        <th scope="col">Visualizar</th>
                        <th scope="col">Entregar</th>

                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr>
                            <td>Compra {{ $i + 1 }}</td>
                            <td scope="row">
                                <div class="row">
                                    Cliente {{ $i + 1 }} da Silva
                                </div>
                            </td>
                            @if ($i < 1)
                                <td><a href="#" class="btn btn-warning btn-sm">Em separação</a></td>
                            @endif
                            @if ($i > 0 && $i < 3)
                                <td><a href="#" class="btn btn-info btn-sm">Em rota de entrega</a></td>
                            @endif
                            @if ($i > 2 && $i < 4)
                                <td><a href="#" class="btn btn-success btn-sm">Entregue</a></td>
                            @endif
                            @if ($i == 4)
                                <td><a href="#" class="btn btn-secondary btn-sm">Empacotamento</a></td>
                            @endif

                            @if ($i < 1)
                                <td><a href="{{ asset('/separate-purchasing') }}"><i class="bi bi-eye"
                                            id="view-purchase"></i></a></td>
                            @endif
                            @if ($i > 0 && $i < 3)
                                <td><a href="{{ asset('/separate-purchasing') }}"><i class="bi bi-eye"
                                            id="view-purchase"></i></a></td>
                            @endif
                            @if ($i > 2 && $i < 4)
                                <td><a href="{{ asset('/separate-purchasing') }}"><i class="bi bi-eye"
                                            id="view-purchase"></i></a></td>
                            @endif
                            @if ($i == 4)
                                <td><a href="{{ asset('/packaging') }}"><i class="bi bi-eye" id="view-purchase"></i></a>
                                </td>
                            @endif
                            <td><a href="#" class="btn btn-success btn-sm">Finalizar</a></td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </form>
    </div>
@endsection
