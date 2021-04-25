@extends('index')
@section('content')
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
                    <td scope="row"><img src="{{ asset('images/product.svg') }}" class="rounded float-left product" alt="Produto"> 
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </td>
                    <td>
                        <input type="checkbox" class="form-check-input check-separate-purchase" name="check-separate-purchase">
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div class="row mb-5">
        <div class="col" id="finish-btn">
            <a href="{{ asset('purchasing-management') }}" class="btn btn-primary btn-sm disabled" id="complete-separate-purchase">Finalizar</a>
        </div>
    </div>
    <script src="{{ asset('js/separatePurchase.js') }}"></script>
@endsection
