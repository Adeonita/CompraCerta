@extends('index')
@section('content')

 <div class="container bootdey mb-5">
    <div class="painel painel-default history-screen">
        <div class="painel-heading mb-4">
           <h3>
                <i class="bi bi-hourglass-split"></i> Historico de Compras
           </h3>
        </div>
        <table id="myHistoric" class="table table">
            @for ($i = 0; $i < 4; $i++)
                    <div class="historic-body mt-3">
                        <div class="row user-panel-historic">
                            <div class="col-md-11 control-panel">
                                <div class="row user-panel-historic">
                                    <div class="col-md-12">
                                        <div class="pull-right">
                                        <label class="label label-danger">Estado da Compra
                                        <fieldset disabled>
                                        <div class="form-group">
                                            <select class="form-control" id="historicStateControl">
                                            <option id = "complete">Finalizada</option>
                                            <option id = "processing">Processando</option>
                                            <option id = "canceled">Cancelada</option>
                                            </select>
                                        </div>
                                        <fieldset>
                                        </label>
                                        </div>
                                        <p>Quantidade: 15, Valor: R$ 121.35</p>
                                        <a data-placement="top" class="btn btn-info" href="{{ url('/cart') }}" title="btnRepetirCompra" id = "btnRepetirCompra"><i class="bi bi-arrow-bar-up"></i></a>
                                        <a data-placement="top" class="btn btn-danger" href="#" title="btnaPagar" id = "btnaPagar"><i class="bi bi-trash"></i></a>
                                    </div>
                                    <div class="col-md-12 historic-date"><p>Entrega Feita em: 23/02/2021<p></div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endfor
        </table>
    </div>
 </div>

@endsection