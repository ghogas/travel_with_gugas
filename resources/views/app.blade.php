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

<!-- background-color: #cec7b6; -->
<body">

    <header>
        <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #312c20; border-color: #000;">
            <div class="container">
                <a class="navbar-brand text-light">TravelWithGugas</a>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="{{route('dashboard')}}" aria-current="page">Inicio<span class="visually-hidden">(current)</span></a>
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
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="nav-link text-light" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit(); " role="button">
                                    <i class="fas fa-sign-out-alt"></i>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                    <div class="p-3">
                        <button type="button" class=" nav-item btn btn-light">
                            <a class="nav-link text-dark" href="{{route('login')}}">Login</a>
                        </button>
                        <button type="button" class=" nav-item btn btn-light">
                            <a class="nav-link text-dark" href="{{route('register')}}">Cadastro</a>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

    </header>

    <main>
        <section class="p-4">
            @yield('conteudo')

        </section>
    </main>


    <footer class="text-center">

        <h6>Desenvolvido por Gustavo Henrique dos Santos Carvalho</h6>

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