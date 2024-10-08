<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <title>California Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7d0708f0dd.js" crossorigin="anonymous"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #198754;" data-bs-theme="dark">
        <div class="container-fluid col-11">
            <a class="navbar-brand text-white fs-2" href="#">
                <img src="img/moto.png" Logo width="45" height="44" class="d-inline-block align-text-top">
                CALIFORNIA EXPRESS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-lg-flex justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active fs-5" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#sobre">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#servico">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#contato">Contato</a>
                    </li>
                    <li class="nav-item">
                        <button type="button" class="btn btn-warning fs-6 " data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Entrar
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background-color: #444444;">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Conteúdo do formulário de  -->
                    <main class="container">
                        <figure class="logo">

                            <H3>CALIFORNIA EXPRESS</H3>
                        </figure>
                        <h4>Login</h4>
                        <form action="POST">
                            <div class="input-field">
                                <input type="text" name="email" id="username" placeholder="E-mail">
                                <div class="underline"></div>
                            </div>
                            <div class="input-field">
                                <input type="password" name="senha" id="password" placeholder="Senha">
                                <div class="underline"></div>
                            </div>
                            <a href="cadastro.php" style="color: #198754; font-size: 12px;">Registre-se aqui</a>
                            <input type="submit" value="Entrar">
                        </form>

                        <div class="footer">

                            <span style=" margin-left: 28%;"> Ou faça login usando</span>


                            <div class="social-fields">
                                <div class="social-field twitter">

                                </div>

                                <!--Google-->
                                <div class="g-signin2" style="width: 400%;" data-onsuccess="onSignIn"></div>


                            </div>
                        </div>
                </div>
                </main>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    </div>


    <img src="img/Design sem nome_resized.png" class="w-100" alt="">

    <!--Sessão 2 -->
    <section class="section ">
        <div class="container-fluid p-3">

            <div class="row">
                <h1 class="text-center p-3"> Por que nos escolher</h1> <br>

                <!--Caminhão-->
                <div class="col-md-6 col-lg-4 mb-3 align-items-center text-center" style="width: 18rem;" id="cardteste">
                    <i class="bi bi-truck" style="font-size: 100px;"></i>
                    <div class="card-body">
                        <h5 class="card-title">RAPIDEZ E PRATICIDADE</h5>
                        <p class="card-text">Temos as entregas mais rápidas de toda baixada santista.</p>
                    </div>
                </div>


                <!--grafico-->

                <div class="col-md-6 col-lg-4 mb-3 align-items-center text-center" style="width: 18rem;" id="cardteste">
                    <i class="bi bi-bar-chart-fill" style="font-size: 112px; "></i>
                    <div class="card-body">
                        <h5 class="card-title">ENTREGAS</h5>
                        <p class="card-text">Mais de DUAS MIL entregas esse ano.</p>
                    </div>
                </div>

                <!--Comunicação-->
                <div class="col-md-6 col-lg-4 mb-3 align-items-center text-center" style="width: 18rem;" id="cardteste">
                    <i class="bi bi-chat-dots" style="font-size: 98px;"></i>
                    <div class="card-body">
                        <h5 class="card-title">COMUICAÇÃO</h5>
                        <p class="card-text"> Pontual e prática, buscando sempre melhor compreensão dos nossos clientes.
                        </p>
                    </div>
                </div>






            </div>

        </div>


    </section>


    <!--sessão 3 Sobre nos-->


    <p id="sobre"></p>
    <br>
    <br>

    <div class="container-fluid d-flex " style="background-color: #198754;">
        <div class="row row col-11 mt-0 mb-5 d-flex">
            <h1 class="text-center p-2 d-flex " style="margin-left: 5%; margin-top: 2%; color: white;"> SOBRE NÓS</h1>

            <div class="card p-4"
                style="width: 33%; margin-left: 38%; margin-bottom: 2%;  box-shadow: 6px 6px 10px #222222;">
                <div class="card-body">
                    <h5 class="card-title p-3">Nossa empresa está no ramo de frete e carreto há mais de 10 anos.
                        Somos completamente sérios com os nossos serviços.</h5>

                    <a href="#" class="card-link text-center">Clique para saber mais.</a>
                </div>
            </div>


        </div>
    </div>



    <!--Carrosel-->

    <h1 class="text-center p-3" id="servico">Alguns de nossos serviços</h1>

    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/c1.jpg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/c2.jpg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/c3.jpg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/c4.jpeg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/c5.jpeg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/c6.jpeg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/c7.jpeg" class="d-block w-50 mx-auto" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/c8.jpeg" class="d-block w-50 mx-auto" alt="...">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <hr>

    <!--Avaliações de cliente -->
    <h1 class="text-center p-3">O que nossos clientes dizem</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <center>
                        <img src="img/rosto1.jpeg" alt="Marcio" class="user mb-3"
                            style="border-radius: 50%; width: 125px;">
                    </center>
                    <h3>Marcio</h3>
                    <ul class="avaliacao">
                        <li class="star-icon ativo" data-avaliação="1"></li>
                        <li class="star-icon" data-avaliação="2"></li>
                        <li class="star-icon" data-avaliação="3"></li>
                        <li class="star-icon" data-avaliação="4"></li>
                        <li class="star-icon" data-avaliação="5"></li>
                    </ul>
                    <p class="coment">Adorei o atendimento, foram super gentis! As entregas foram feitas de forma rápida
                        e eficaz.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <center>
                        <img src="img/rosto2.jpeg" alt="Larissa" class="user mb-3"
                            style="border-radius: 50%; width: 125px;">
                    </center>
                    <h3>Larissa</h3>
                    <ul class="avaliacao">
                        <li class="star-icon " data-avaliação="6"></li>
                        <li class="star-icon" data-avaliação="7"></li>
                        <li class="star-icon" data-avaliação="8"></li>
                        <li class="star-icon" data-avaliação="9"></li>
                        <li class="star-icon" data-avaliação="10"></li>
                    </ul>
                    <p class="coment">Os funcionários são super competentes e o serviço foi excelente. Recomendo muito!
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <center>
                        <img src="img/rosto3.jpeg" alt="Giovanna" class="user mb-3"
                            style="border-radius: 50%; width: 125px;">
                    </center>
                    <h3>Giovanna</h3>
                    <ul class="avaliacao">
                        <li class="star-icon ativo" data-avaliação="11"></li>
                        <li class="star-icon" data-avaliação="12"></li>
                        <li class="star-icon" data-avaliação="13"></li>
                        <li class="star-icon" data-avaliação="14"></li>
                        <li class="star-icon" data-avaliação="15"></li>
                    </ul>
                    <p class="coment">Fui muito bem atendida e a entrega foi super rápida. Ótimo serviço!</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        var stars = document.querySelectorAll('.star-icon');
        document.addEventListener('click', function (e) {
            var classStar = e.target.classList;
            if (!classStar.contains('ativo')) {
                stars.forEach(function (star) {
                    star.classList.remove('ativo');
                });
                classStar.add('ativo');
            }
        })
    </script>


    </section>

    <hr>
    <div class="container" id="rodape">
        <div class="row">

            <div class="col-md">


                <h5 class="card-title" id="contato">Entre em Contato</h5>
                <br>

                <p style="font-size: 22px;"> <i class="fa-brands fa-instagram " style="font-size: 25px;"></i>
                    @californiaexpress </p>

                <p style="font-size: 22px;"> <i class="fa-brands fa-whatsapp" style="font-size: 25px;"> </i> Telefone:
                    +55 (13) 97404-5332</p>

            </div>

            <div class="col-md ">

                <h5 style="font-size: 33px; padding-bottom: 3%;">CALIFORNIA EXPRESS</h5>
                <h6 style="font-size: 18px;"> São Vicente - SP </h6>
                <H6 style="font-size: 18px;">CNPJ: 33.495.642/0001-68</H6>
                <H6 style="font-size: px;">Endereço: R. Pará, 143 - Parque Bitaru, São Vicente - SP, 11330-080 </H6>


            </div>
        </div>
    </div>



    <!--whatsapp-->

    <div class="whats">

        <a href="https://wa.me/13996932926" target="blank"></a>
        <img src="img/whatsapp1.png" width="70" alt="Fale conosco pelo Whatsapp" title="Fale conosco pelo whatsapp">
    </div>




    <!--Rodape-->

    <footer class=" bg-dark text-white text-center ">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 p-3 ">


                    <h6 style=" margin: auto;">CALIFORNIA EXPRESS © . Todos os direitos reservados.</h6>



                </div>

            </div>
        </div>
    </footer>

    <script src="https://apis.google.com/js/platform.js" async defer></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

</body>

</html>