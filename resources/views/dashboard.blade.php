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
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Destino</span>
                <input type="text" class="form-control" placeholder="Digite seu destino" aria-label="Destino de viagem" aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Digite o tempo de estadia" aria-label="Tempo de estadia" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Tempo de estadia</span>
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text">R$</span>
                <input type="text" class="form-control" placeholder="Quantidade monetária" aria-label="Quantidade de Dinheiro">
                <span class="input-group-text"> ,00</span>
            </div>

            <div class="container overflow-hidden p-1">
                <div class="row gx-5">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Trabalho
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Turismo
                            </label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Outro
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição da Viagem</label><br>
                <small>Narre sua viagem, mostrando pontos turísticos etc..</small>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea><br>

                <button type="button" class="btn btn-dark btn-lg btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-map" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M3.1 11.2a.5.5 0 0 1 .4-.2H6a.5.5 0 0 1 0 1H3.75L1.5 15h13l-2.25-3H10a.5.5 0 0 1 0-1h2.5a.5.5 0 0 1 .4.2l3 4a.5.5 0 0 1-.4.8H.5a.5.5 0 0 1-.4-.8l3-4z" />
                        <path fill-rule="evenodd" d="M8 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zM4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999z" />
                    </svg>
                    <small>Roteirize</small>
                </button>
            </div>
        </div>
    </div>
</div>

@endsection