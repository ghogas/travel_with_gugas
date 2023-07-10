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

    </header>

    <div class="container">

    </div>

    <main>
        <section class="p-4">
            <div class="container text-center">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    <div class="col">
                        <div class="card">
                            <img src="imagens/1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Facebook</h5>
                                <p class="card-text">O Facebook é uma rede social que permite conversar com amigos e
                                    compartilhar mensagens, links, vídeos e fotografias.</p>
                                <a href="https://www.facebook.com/profile.php?id=100073886390648" class="btn btn-dark">CONTATO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="imagens/2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">GitHub</h5>
                                <p class="card-text">GitHub é uma plataforma de hospedagem de código-fonte e arquivos
                                    com controle de versão usando o Git.</p><br>
                                <a href="https://github.com/ghogas" class="btn btn-dark">CONTATO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="imagens/3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">LinkedIn</h5>
                                <p class="card-text">LinkedIn é uma plataforma de mídia social focada em negócios e
                                    emprego que funciona através de sites e aplicativos móveis.</p>
                                <a href="https://www.linkedin.com/in/gustavo-henrique-020594205/" class="btn btn-dark">CONTATO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="imagens/4.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Instagram</h5>
                                <p class="card-text">O Instagram é uma rede social online de compartilhamento de fotos e
                                    vídeos entre seus usuários</p><br>
                                <a href="https://www.instagram.com/gusta_wocarv/?next=%2F" class="btn btn-dark">CONTATO</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="imagens/6.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Twitter</h5>
                                <p class="card-text">Twitter é uma rede social e um serviço de microblog, que permite aos usuários enviar e receber atualizações pessoais de outros contatos.
                                </p>
                                <a href="https://twitter.com/gustacarvh" class="btn btn-dark">CONTATO</a>
                            </div>
                        </div>
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