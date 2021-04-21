@extends('index')
@section('content')
    <table id="my-cart" class="table table mt-5">
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
    <div class="row mb-5 mt-5">
        <div class="col">
            <a href="{{ url('/') }}" class="btn btn-outline-primary btn-sm">Continuar comprando</a>
        </div>
        <div class="col" id="next-btn">
            <a href="{{ url('/addressSelection') }}" class="btn btn-primary btn-sm">Continuar para o endereço</a>
        </div>
    </div>
@endsection
