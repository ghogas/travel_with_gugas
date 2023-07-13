@extends('app')
@section('conteudo')

<div class="container px-4">
    <div class="row gx-5">
        <div class="col">
            <h6> Selecione seu destino: </h6>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4361.690391979293!2d-45.86029407266309!3d-23.180059230739737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cc4bc8557f3105%3A0x26bc31b7142cc60f!2sR.%20Saigiro%20Nakamura%2C%20400%20-%20Vila%20Industrial%2C%20S%C3%A3o%20Jos%C3%A9%20dos%20Campos%20-%20SP%2C%2012220-280!5e0!3m2!1spt-BR!2sbr!4v1680630936768!5m2!1spt-BR!2sbr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="col p-4">
            <form method="POST" action="{{ route('novoroteiro') }}" id="form-novo-roteiro">
                @csrf

                <div class="mb-3">
                    <input type="text" class="form-control" name="destino" id="destino" aria-describedby="emailHelp" placeholder="Digite seu destino">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" id="destino" placeholder="Tempo de Estadia" name="estadia">
                </div>
                <p class="mt-3">
                    <label for="valor">Valor:</label><br>
                    <input type="number" class="border" name="dinheiro" step="0.01" required>
                </p>

                <div class="mb-3 form-check">
                    <input type="radio" name="tipo" value="Trabalho" required> Trabalho
                    <input class="ms-5" type="radio" name="tipo" value="Turismo" required> Turismo
                    <input class="ms-5" type="radio" name="tipo" value="Outro" required> Outro
                </div>


                <div class="mb-2">
                    <label for="exampleFormControlTextarea1">Descrição da Viagem</label><br>
                    <small>Narre sua viagem, mostrando pontos turísticos etc..</small>
                    <textarea class="form-control" name="descricao" id="descricao" rows="3"></textarea><br>
                </div>



                <button type="submit" class="btn btn-dark p-1" value="Enviar">Submit</button>

            </form>
        </div>
    </div>

    @endsection