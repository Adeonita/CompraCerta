@extends('index')
@section('content')

 <div class="container bootdey mb-5">
    <div class="panel panel-default panel-historico">
        <div class="panel-heading mb-4">
           <h3>
                <i class="bi bi-hourglass-split"></i> Historico de Compras
           </h3>
        </div>
        <table id="meu-historico" class="table table">
            @for ($i = 0; $i < 4; $i++)
                    <div class="panel-historic-body mt-3">
                        <div class="row painel-usuario">
                            <div class="col-md-11">
                                <div class="row painel-usuario">
                                    <div class="col-md-12">
                                        <div class="pull-right">
                                        <label class="label label-danger">Estado da Compra
                                        <fieldset disabled>
                                        <div class="form-group">
                                            <select class="form-control" id="controleEstado">
                                            <option id = "finalizada">Finalizada</option>
                                            <option id = "processando">Processando</option>
                                            <option id = "cancelada">Cancelada</option>
                                            </select>
                                        </div>
                                        <fieldset>
                                        </label>
                                        </div>
                                        <p>Quantidade: 15, Valor: R$ 121.35</p>
                                        <a data-placement="top" class="btn btn-info" href="#" title="btnRepetirCompra" id = "btnRepetirCompra"><i class="bi bi-arrow-bar-up"></i></a>
                                        <a data-placement="top" class="btn btn-danger" href="#" title="btnaPagar" id = "btnaPagar"><i class="bi bi-trash"></i></a>
                                    </div>
                                    <div class="col-md-12 data-historico"><p>Entrega Feita em: 23/02/2021<p></div>
                                </div>
                            </div>
                        </div>
                    </div>
            @endfor
        </table>
    </div>
 </div>

@endsection