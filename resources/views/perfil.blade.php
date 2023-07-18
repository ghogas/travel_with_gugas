@extends('app')
@section('conteudo')



<div class="container px-4">
    <div class="row gx-5">
        <div class="col">
            <div class="card mb-3">
                <div class="row gx-5">
                    <div class="col">
                        <p class="fs-5">Nome Cadastrado</p>
                        <div class="card-body bg-dark text-light ">
                            {{Auth()->user()->name}}
                        </div>
                        <h5 class="fs-5">Email Cadastrado</h5>
                        <div class="card-body bg-dark text-light">
                            {{Auth()->user()->email}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@endsection