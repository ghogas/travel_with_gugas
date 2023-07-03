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

<body background="/public/imagens/wallpaper.jpg">

    <header>
        <!-- <nav class="navbar navbar-expand-sm navbar-light bg-dark">
            <div class="container">
                <a class="navbar-brand text-light  " href="#">TravelWithGugas</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="#" aria-current="page">Inicio<span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('contato')}}">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('portifolio')}}">Portifólio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('privacidade')}}">Privacidade</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{route('configuracoes')}}">Configurações</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <!-- Container wrapper -->
                <div class="container-fluid">
                <!-- Toggle button -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-mdb-toggle="collapse"
                    data-mdb-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <i class="fas fa-bars"></i>
                </button>
            
                <!-- Collapsible wrapper -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Navbar brand -->
                        <a class="navbar-brand mt-2 mt-lg-0 text-center">
                        
                            <img
                                src="logob&w.png"
                                height="70"
                                alt="TWG Logo"
                                loading="lazy"
                            /><h6>TravelWithGugas</h6> 

                        </a>
                        <ul class="nav-item">
                            <a class="nav-link" href="{{route('privacidade')}}">Privacidade</a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="{{route('configuracoes')}}">Configurações</a>
                        </ul>
                    </div>
                </div>
            </nav>

    </header>

    <main>
        <section class="p-5">
            @yield('conteudo')

        </section>
    </main>


    <footer class="text-center">

        Desenvolvido por Gustavo Henrique dos Santos Carvalho

    </footer>

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