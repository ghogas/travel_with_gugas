@extends('app')

@section('conteudo')
<!doctype html>
<html lang="pt-BR">

<head>
    <title>TravelWIthGugas</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Biblioteca de ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS do plugin lightbox -->
    <link rel="stylesheet" href="css/lightbox.min.css">

    <!-- AOS animate CSS  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="mt-5 pt-1">

        <div class="container"> 
            <section>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                                <img src="imagens/landscape header.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="imagens/tumblr_d5463d12a6caa811d1f9eb023f10e072_6229ffbb_1280.jpg" class="d-block w-100" alt="...">
                        </div>

                        <div class="carousel-item">
                            <img src="imagens/landscape header2.jpg" class="d-block w-100" alt="...">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Anterior</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Próximo</span>
                    </button>

                </div>
            </section>
        </div>


    <div class="text-center p-2 fs-6">
    
            <p>
                    Sabe aquela vontade de viajar que preenche nossa rotina eventualmente? Aquele momento em
                    que desejamos uma jornada, uma aventura diferente em nossas vidas. Para isso, o TWG(TravelWithGugas) te auxilia
                    nessa busca ansiosa pela suas novas e permanentes memórias. Sabemos que escolher o destino não é lá uma das coisas 
                    mais difíceis para se fazer, muito menos o que fazer durante o passeio, e é aí que entramos, te ajudamos a fazer a 
                    escolha certa quando se diz em viajar, mostramos tudo em primeira mão para que sua viagem seja inesquecível. Praias, 
                    montanhas, trilhas, campos, entre outros! Nosso objetivo é fazer você se divertir ao máximo sabendo que fez a escolha
                    certa. Aqui mostramos tudo que você pode encontrar sobre seu destino favorito além de possibilitar novos passeios e 
                    jornadas. está em dúvida? Nós ajudamos. Quer viajar? Nós ajudamos.
            </p>

        </div>
    </main>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- JS do Lightbox  -->
    <script src="js/lightbox.min.js"></script>

    <!-- JS AOS animate -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- JS personalizado -->
    <script src="js/code.js"></script>
        
</body>
@endsection