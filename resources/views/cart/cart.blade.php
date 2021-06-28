@extends('index')
@section('content')
    <div class="mb-5">
        <div class="my-3">
            <h3>
                <i class="bi bi-cart-fill"></i> Meu carrinho
            </h3>
            <form action="" class="form-control p-4">
                <table id="my-cart" class="table table">
                    <thead>
                        <tr>
                            <th scope="col">Quantidade</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Valor unitário</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="row mt-5">
                    <div class="col">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary btn-sm">Continuar comprando</a>
                    </div>
                    <div class="col" id="next-btn">
                        <h5 class="mb-3">Total: <span id="totalCart"></span></h5>
                        <a href="{{ url('/address-select') }}" class="btn btn-primary btn-sm">Continuar para o
                            endereço</a>
                    </div>
                </div>
                <div class="col mt-5">
                    <a href="{{ url('/historic-page') }}" class="btn btn-outline-warning btn-sm">Salvar Carrinho</a>
                </div>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/cart.js') }}"></script>
@endsection
