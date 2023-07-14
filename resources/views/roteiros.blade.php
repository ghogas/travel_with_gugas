@extends('app')
@section('conteudo')
<!-- 
@foreach ($roteiros as $roteiro)
<div class="card mb-3">
    <div class="card-header">
        {{$roteiro->destino}}
    </div>
    <div class="card-body">
        {{$roteiro->estadia}}
    </div>
    <div class="card-body">
        {{$roteiro->dinheiro}}
    </div>
    <div class="card-body">
        {{$roteiro->tipo}}
    </div>
    <div class="card-body">
        {{$roteiro->descricao}}
    </div>
    <div class="card-footer">
        <strong>R$ {{$roteiro->dinheiro}}</strong> &nbsp; &nbsp;
        <a href="#"><i class="fas fa-edit"></i></a> &nbsp; &nbsp;
        <a href="#"><i class="fas fa-trash-alt"></i></a>
    </div>
</div>
@endforeach -->

@if (count($roteiros) === 0)
<p>Não há receitas para esse usuário.</p>
@else
@foreach ($roteiros as $roteiro)
<div class="container px-4">
    <div class="row gx-5">
        <div class="col">
            <div class="card mb-3">
                <div class="card-header bg-dark text-light fw-bold">
                    {{$roteiro->destino}}<br>
                    <a href="#"><i class="fas fa-edit text-light"></i></a> &nbsp; &nbsp;
                    <a href="#"><i class="fas fa-trash-alt text-light"></i></a>
                </div>
                <div class="card-body">
                    {{$roteiro->estadia}}
                </div>
                <div class="card-body">
                    {{$roteiro->dinheiro}}
                </div>
                <div class="card-body">
                    {{$roteiro->tipo}}
                </div>
                <div class="card-body">
                    {{$roteiro->descricao}}
                </div>
                <div class="card-body">
                    R$ {{$roteiro->dinheiro}} &nbsp; &nbsp;
                </div>
            </div>
        </div>
        <div class="col">
            <div class="p-3 border bg-light">Custom column padding</div>
        </div>
    </div>
</div>

@endforeach
@endif




@endsection