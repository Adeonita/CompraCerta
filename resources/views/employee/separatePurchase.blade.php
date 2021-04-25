@extends('index')
@section('content')
    <div class="mb-5">
        <div class="my-3">
            <h3>
                Separação de compra
            </h3>
        </div>
        <form action="" class="form-control p-4">
            <table id="my-cart" class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Produto</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 5; $i++)
                        <tr class="align-middle">
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
            <div class="d-flex flex-row-reverse">
                <button class="btn btn-success mx-2"> <i class="bi bi-check"></i> Finalizar</button>
            </div>
        </form>
    </div>
@endsection
