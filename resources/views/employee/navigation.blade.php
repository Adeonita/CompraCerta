@extends('index')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-4">
            <a href="{{ url('/purchasing-management') }}" class="badge bg-success col-12">
                <p>Gerenciamento</p>
            </a>
        </div>
        <div class="col-12 col-sm-4">
            <a href="{{ url('/packaging') }}" class="badge bg-primary col-12">
                <p>Empacotamento</p>
            </a>
        </div>
        <div class="col-12 col-sm-4">
            <a href="{{ url('/separate-purchasing') }}" class="badge bg-warning col-12">
                <p>Separação</p>
            </a>
        </div>
        <div class="col-12 col-sm-4">
            <a href="#" class="badge bg-info col-12">
                <p>Entrega</p>
            </a>
        </div>
        <div class="col-12 col-sm-4">
            <a href="{{ url('/evaluate-purchase') }}" class="badge bg-secondary col-12">
                <p>Avalição do Cliente</p>
            </a>
        </div>
    </div>
@endsection
