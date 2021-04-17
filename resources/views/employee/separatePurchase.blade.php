@extends('index')
@section('content')
    <table id="my-cart" class="table table-hover mt-5">
        <thead>
            <tr>
                <th scope="col">Quantidade</th>
                <th scope="col">Produto</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td>
                        <p>1 un</p>
                    </td>
                    <td scope="row"><img src="{{ asset('images/product.svg') }}" class="rounded float-left product" alt="Produto"> 
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div class="row mb-5">
        <div class="col" id="finish-btn">
            <a href="{{ asset('purchasing-management') }}" class="btn btn-primary btn-sm">Finalizar</a>
        </div>
    </div>
@endsection
