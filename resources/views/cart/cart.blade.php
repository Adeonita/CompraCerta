@extends('index')
@section('content')
    <table id="my-cart" class="table  mt-5">
        <thead>
            <tr>
            <th scope="col">Quantidade</th>
            <th scope="col">Produto</th>
            <th scope="col">Valor unitário</th>
            <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            @for($i = 0; $i < 5; $i ++ )
                <tr>
                    <td class="align-bottom">
                        <div>
                            <div id="amount">1 un</div>
                        </div>
                        <div id="buttons">
                        <button type="button" id="button-less" class="btn btn-outline-primary btn-sm">-</button>
                        <button type="button" id="button-more" class="btn btn-outline-primary btn-sm">+</button>
                        </div>
                    </td>
                    <td scope="row"><img src="{{ asset('images/product.svg') }}" class="rounded float-left product" alt="Produto"> Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
                    <td>9,90</td>
                    <td>9,90</td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div class="row mb-5">
        <div class="col">Subtotal</div>
        <div class="col-2">29,90</div>
    </div>
    <div class="row mb-5">
        <div class="col">
            <a href="{{ url('/') }}" class="btn btn-outline-primary btn-sm">Continuar comprando</a>
        </div>
        <div class="col" id="next-btn">
            <a href="#" class="btn btn-primary btn-sm">Próximo</a>
        </div>
    </div>
@endsection
