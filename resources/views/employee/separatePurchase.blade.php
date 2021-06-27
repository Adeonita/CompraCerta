@extends('index')
@section('content')
    <div class="mb-5">
        <div class="my-3">
            <h3>
                <i class="bi bi-clipboard"></i> Separação
            </h3>
        </div>
        <form action="">
            <table id="my-cart" class="table table-hover mt-5">
                <thead class="text-center">
                    <tr>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Separado</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr class="text-center">
                            <td>
                                <p>1 un</p>
                            </td>
                            <td scope="row"><img src="{{ asset('images/feijao.png') }}" class="rounded float-left product"
                                    alt="Produto">
                                Feijão Camil tipo 1
                            </td>
                            <td>
                                <input type="checkbox" class="form-check-input check-separate-purchase"
                                    name="check-separate-purchase">
                            </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            <div class="d-flex flex-row-reverse">
                <a href="{{ asset('packaging') }}" class="btn btn-success btn-sm disabled"
                    id="complete-separate-purchase">
                    <i class="bi bi-check"></i>
                    Enviar para Separação
                </a>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/separatePurchase.js') }}"></script>
@endsection
