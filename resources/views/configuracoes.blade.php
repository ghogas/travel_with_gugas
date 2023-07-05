@extends('app')

@section('conteudo')

<div class="container">
    <div class="row p-3">
        <div class="col">
            <h5 class="fst-bold fs-5">Informações do Usuário</h5>
            <hr width=“2” size=“100”>
            <div class="input-group mb-3">
                <span class="input-group-text" id="input-name">Nome</span>
                <input type="text" class="form-control" placeholder="Nome Registrado" aria-label="name" aria-describedby="input-name">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="input-email">Email</span>
                <input type="text" class="form-control" placeholder="Endereço de Email Registrado" aria-label="email" aria-describedby="input-email">
            </div>
            <p>
                Travel With Gugas agradece imensamente pela escolha de usar-nos!<br>
                A aba Configurações mostra funções que você pode realizar no nosso site, proporcionamos a você (ou tentamos) o nosso melhor para tornar sua estadia conosco a mais acessível possível.
                Quaisquer duvidas sugerimos procurar-nos por nosso endereço de email:<br>
                - <strong>gustavocarvhenrique12@gmail.com</strong>
            </p>
        </div>
        <div class="col">
            <h5 class="fst-bold fs-5">Funções da Conta</h5>
            <hr width=“2” size=“100”>
            <button type="button" class="btn btn-link">Recuperação de Senha</button>
            <button type="button" class="btn btn-link">Apagar Conta</button>
        </div>
    </div>
</div>

@endsection