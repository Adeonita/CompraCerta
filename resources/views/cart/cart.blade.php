@extends('index')
@section('content')
    <div class="mb-5">
        <div class="my-3">
            <h3>
                <i class="bi bi-cart-fill"></i> Meu carrinho
            </h3>
        </div>
        <form action="" class="form-control p-4">
            <table id="my-cart" class="table table">
                <thead>
                    <tr>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Valor unitário</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr class="align-middle line-cart">
                            <td>
                                <input type="number" min="1" max="10">
                            </td>
                            <td scope="row">
                                <img src="{{ asset('images/product.svg') }}" class="rounded float-left product" alt="Produto"> 
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            </td>
                            <td>5.90</td>
                        </tr>
                    @endfor
                </tbody>
            </table>
            <div class="row mt-5">
                <div class="col">
                    <a href="{{ url('/') }}" class="btn btn-outline-primary btn-sm">Continuar comprando</a>
                </div>
                <div class="col" id="next-btn">
                    <a href="{{ url('/payment') }}" class="btn btn-primary btn-sm">Continuar para o pagamento</a>
                </div>
            </div>
        </form>
    </div>
@endsection
