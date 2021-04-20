@extends('index')
@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="bg-white p-2 border rounded px-3">
                <div class="d-flex flex-row justify-content-between align-items-center order">
                    <div class="d-flex flex-column order-details"><span>Sua entrega esta a caminho</span><span class="date">data estimada 10 Maio, 2021</span></div>
                    <div class="tracking-details"><button class="btn btn-outline-primary btn-sm" type="button">Detalhes do Rastreio</button></div>
                </div>
                <hr class="divider mb-4">
                <div class="d-flex flex-row justify-content-between align-items-center align-content-center"><span class="dot"></span>
                    <hr class="flex-fill tracking-line"><span class="dot"></span>
                    <hr class="flex-fill tracking-line"><span class="d-flex justify-content-center align-items-center big-dot dot"></span>
                    <hr class="flex-fill tracking-line"><span class="dot"></span>
                    <hr class="flex-fill tracking-line"><span class="dot"><i class="fa fa-check text-white"></i></span></div>
                <div class="d-flex flex-row justify-content-between align-items-center">
                    <div class="d-flex flex-column align-items-start"><span>05 maio</span><span>Compra Confirmada</span></div>
                    <div class="d-flex flex-column justify-content-center"><span>06 maio</span><span>Nota fiscal Emitida</span></div>
                    <div class="d-flex flex-column justify-content-center align-items-center"><span>08 Maio</span><span>Entrega despachada</span></div>
                    <div class="d-flex flex-column align-items-center"><span>10 Maio</span><span>Saiu para a entregar ao consumidor</span></div>
                    <div class="d-flex flex-column align-items-end"><span>10 Maio</span><span>Entregue</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection