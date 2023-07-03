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
            <div class="container bg-light">
                <div class="row">
                    <div class="col p-2">
                        <img src="imagens/ARCHITECTURE.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-2">
                        <img src="imagens/BEACH.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-2">
                        <img src="imagens/LAKE.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-2">
                        <img src="imagens/MOUNTAIN.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-2">
                        <img src="imagens/NATURE.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-2">
                        <img src="imagens/VILLAGE.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col p-2">
                        <img src="imagens/NIGHT LIFE.jpg" class="img-fluid" alt="...">
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