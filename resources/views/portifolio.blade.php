@extends('app')

@section('conteudo')
<!doctype html>
<html lang="pt-BR">

<head>
    <title>Tela Inicial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Biblioteca de ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CSS do plugin lightbox -->
    <link rel="stylesheet" href="css/lightbox.min.css">

    <!-- AOS animate CSS  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS personalizado -->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body background="imagens/wallpaper.jpg">

    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">TravelWithGugas</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" aria-current="page">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('contato')}}">Contato<span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('portifolio')}}">Portifólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('privacidade')}}">Privacidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('configuracoes')}}">Configurações</a>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <div class="container p-3">
            <div class="row align-items-start">
                <div class="col bg-dark text-white">
                    <p> Ás vezes sabemos o quanto precisamos de férias, entretanto, escolher o local perfeito para passar essa nova aventura pode ser desafiador, por isso, o Travel With Gugas disponibilizou um portifólio contendo destinos diversos proporcionando dicas para auxiliar você na dúvida para onde ir</p>
                </div>
            </div>
        </div>
        <section class="p-3">
        <div class="container p-3">
            <div class="row align-items-start">
                <div class="col bg-dark bg-opacity-75 text-white p-2 fst-italic">
                    <p> Ás vezes sabemos o quanto precisamos de férias, entretanto, escolher o local perfeito para
                        passar essa nova aventura pode ser desafiador, por isso, o Travel With Gugas disponibilizou um
                        portifólio contendo destinos diversos proporcionando dicas para auxiliar você na dúvida para
                        onde ir e assim se aventurar em diversas possibilidades de etapas!</p>
                </div>
            </div>
        </div>
        <section class="p-2">
            <div class="container bg-light">
                <div class="row">
                    <div class="col p-2 bg-dark text-light">
                        <img src="imagens/ARCHITECTURE.jpg" class="img-fluid" alt="...">
                        <p><strong>Monumentos</strong> são obras feitas para homenagear pessoas que fizeram parte da
                            história de um
                            lugar ou para simbolizar fatos que foram marcantes, como conquistas e revoluções. Podem ser
                            estátuas, obeliscos, bustos ou outros.
                            São verdadeiros museus a céu aberto. E são sempre uma forma de manter viva a memória de cada
                            lugar e a identidade de um povo. Por isso é importante aprender a preservar e a valorizar
                            todos eles.
                        </p>
                    </div>
                    <div class="col p-2 bg-dark text-light">
                        <img src="imagens/BEACH.jpg" class="img-fluid" alt="...">
                        <p> <strong>Praias</strong> são o desejo de muitos viajantes para dias de férias e descanso.
                            Escolher as melhores
                            praias é tarefa quase impossível, até porque são incontáveis as faixas de areia
                            cercadas por mar e cenários espetaculares que merecem a sua visita, seja no verão ou em
                            qualquer outra estação. Entre as melhores praias do mundo, não faltam pequenas porções de
                            paraíso para ser feliz e ter inúmeros momentos na presença do mar.</p>
                    </div>
                    <div class="col p-2 bg-dark text-light">
                        <img src="imagens/LAKE.jpg" class="img-fluid" alt="...">
                        <p><strong>Lagos</strong> são algumas das paisagens mais deslumbrantes da natureza, oferecendo
                            uma mistura única
                            de beleza, tranquilidade e serenidade. De lagos bonitos cristalinos em tons de azul e verde
                            a lagos cercados por majestosas montanhas, cada lago tem sua própria personalidade, sua
                            chance e
                            características distintas.Lagos são uma ótima opção se procura um ambiente agradável para
                            passar só ou com companhia.
                        </p>
                    </div>
                    <div class="col p-2 bg-dark text-light">
                        <img src="imagens/MOUNTAIN.jpg" class="img-fluid" alt="...">
                        <p><strong>Montanhas</strong> exprimem um simbolismo sagrado, de transcendência e também de
                            estabilidade,
                            imutabilidade e até mesmo de pureza.
                            Não pense que montanha é apenas para quem curte trilhas e escaladas. Esse símbolo
                            majestoso da natureza é um convite à mais serena contemplação, registros fotográficos
                            autênticos e muito mais, com certeza um adorável ambiente para se escolher.
                        </p>
                    </div>
                    <div class="col p-2 bg-dark text-light">
                        <img src="imagens/NATURE.jpg" class="img-fluid" alt="...">
                        <p> <strong>Estruturas</strong> e lugares ao redor da Terra tiveram contato, outrora, com a
                            civilização. Se o homem se
                            apropria do mundo, ele também abandona, em seu percurso, milhares de lugares que escondem,
                            hoje em dia, infindáveis mistérios. Com a natureza reconquistando seu lugar, ela dá um novo
                            sopro de vida a estes lugares. Muitas vezes nos deparamos com lugares como esses, mas
                            existem
                            alguns que com certeza merecem uma visita.</p>
                    </div>
                    <div class="col p-2 bg-dark text-light">
                        <img src="imagens/VILLAGE.jpg" class="img-fluid" alt="...">
                        <p><strong>Vilarejos</strong> estão fazendo muito sucesso entre os turistas do mundo inteiro, já que
                            oferecem o melhor. Com ruas sem carros,
                            restaurantes e bares, esses lugares conseguem unir o rústico com o charmoso,
                            transformando essas vilas em destinos perfeitos para passar férias inesquecíveis.A vida nas
                            grandes capitais pode ser um pouco estressante de vez em quando, trânsito, grandes filas e
                            muitas horas de trabalho nos faz pensar em fugir para paraísos
                            isolados durante um tempo.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
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

</html>
@endsection