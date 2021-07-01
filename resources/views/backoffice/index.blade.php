@extends('index')
@section('content')
@php
    function getBtnByStatus($status){

        switch($status) {
            case 'separação':
                echo "<a href='#' class='btn btn-warning btn-sm'> Enviar para empacotamento </a>";
                break;

            case 'rota de entrega':
                echo "<a href='#' class='btn btn-primary btn-sm'> Em $status</a>";
                break;

            case 'empacotamento':
                echo "<a href='#' class='btn btn-info btn-sm'> Enviar para entrega </a>";
                break;

            case 'finalizado':
                $formmatedStatus = ucfirst($status);
                echo "<a href='#' class='btn btn-success btn-sm'> $formmatedStatus </a>";
                break;
        }
    }
@endphp
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($purchases as $purchase)
                        <tr>
                            <td>Compra {{ $purchase->id }}</td>
                            <td scope="row">
                                <div class="row">
                                    Cliente {{ $purchase->name }} 
                                </div>
                            </td>
                             <td>{{ getBtnByStatus($purchase->status) }}</td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
        </form>
    </div>
@endsection
