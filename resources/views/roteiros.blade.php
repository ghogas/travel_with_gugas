@extends('app')
@section('conteudo')

@if (count($roteiros) === 0)
<div class="container px-2">
    <div class="row gx-5">
        <div class="col align-content-center">
            <h3 class="fst-italic">Não há Roteiros para você.</h3>
        </div>
        <div class="row gx-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-emoji-frown-fill" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm-2.715 5.933a.5.5 0 0 1-.183-.683A4.498 4.498 0 0 1 8 9.5a4.5 4.5 0 0 1 3.898 2.25.5.5 0 0 1-.866.5A3.498 3.498 0 0 0 8 10.5a3.498 3.498 0 0 0-3.032 1.75.5.5 0 0 1-.683.183zM10 8c-.552 0-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5S10.552 8 10 8z" />
            </svg>
        </div>
    </div>
</div>
@else
@foreach ($roteiros as $roteiro)
<div class="container px-4">
    <div class="row gx-5">
        <div class="col">
            <div class="card mb-3">
                <div class="row gx-5">
                    <div class="col">
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
            </div>
        </div>
    </div>
</div>

@endforeach
@endif




@endsection