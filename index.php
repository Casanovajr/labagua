<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="images/icon.png">
    <title>Title</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />


    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>


    <script src="https://kit.fontawesome.com/e837a9f141.js" crossorigin="anonymous"></script>
    <!-- //custom-theme -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="w3_agile_banner_top">
            <div class="agile_phone_mail">
                <ul>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+(254) 002 100 500</li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@Companyonline.net">info@example.com</a></li>
                </ul>
            </div>
        </div>
        <div class="agileits_w3layouts_banner_nav">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="index.php"><img src="images/LabAguaLogoPB2.png" class="img-responsive"></a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="cl-effect-13" id="cl-effect-13">
                        <ul class="nav navbar-nav">

                            <li><a href="portfolio.php">Produções</a></li>
                            <li><a href="blog.php">Projetos</a></li>
                            <li><a href="contact.php">Solicitar uma análise</a></li>
                            <li><a href="https://aguasdamazonia.com/plataforma/iqa.html">Calculadora IQA</a></li>
                        </ul>

                    </nav>

                </div>
            </nav>
        </div>
        <div class="wthree_banner_info">

            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <h3>LabÁgua</h3>
                            <p> O Laboratório de Qualidade da Água da Amazônia (LabÁgua), vinculado a Universidade do Estado do Pará (Uepa), atua em áreas como análises ambientais e monitoramento ambiental, e com serviços de análises de nutrientes e microbiológicas, licenciamento ambiental, monitoramento de corpos hídricos, entre outros. </p>

                        </li>
                        <li>
                            <h3>Sobre o Laboratório</h3>
                            <p> Foi criado em 2021, com a vocação de ser referência em análises ambientais de águas e efluentes na região amazônica. Fruto de um projeto apoiado pela Fundação Amazônia de Amparo a Estudos e Pesquisas (Fapespa) e pela Universidade do Estado do Pará (UEPA), surge o LabÁgua, localizado no Parque de Ciência e Tecnologia Guamá (PCT Guamá). Composto por uma equipe interdisciplinar de pesquisadores, tendo como objetivo desenvolver pesquisa, extensão e prestação de serviços com eficiência para a comunidade. </p>

                        </li>
                        <li>
                            <h3>Missão </h3>
                            <p> Fornecer serviços de qualidade aos seus clientes, proporcionando segurança, confiabilidade e satisfação nos resultados das análises da qualidade da água. </p>

                        </li>
                        <li>
                            <h3>Visão</h3>
                            <p> Tornar-se um laboratório de referência estadual, conceituado entre as instituições públicas e privadas, investindo em qualidade e inovação. </p>

                        </li>
                        <li>
                            <h3>Valores</h3>
                            <p> Compromisso com a pesquisa, extensão e qualidade. Respeito, trabalho em equipe e responsabilidade social e ambiental. </i>

                        </li>
                    </ul>
                </div>
            </section>

            <!-- flexSlider -->
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function(slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- //flexSlider -->
        </div>
    </div>
</div>
<!-- //banner -->
<!-- content -->
<div class="process all_pad agileits">

    <?php
    if (isset($_GET["subscribed"])) {
        echo
        '<div class="alert alert-success" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>SUBSCRIBED!! </strong><p> Thank you for subscribing with us. We will keep you informed on what is happening with Company.</p>
                    </div>';
    } elseif (isset($_GET["fail"])) {
        echo
        '<div class="alert alert-danger" >
                          <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
                         <strong>Ooops!! </strong><p> Looks like you are already subscribed to our mailing list :) </p>
                    </div>';
    }
    ?>

</div>
<!-- //process -->
<!-- Seção - Últimas Postagens -->
<section class="py-5 bg-white shadow-sm">
    <div class="container">
        <!-- Título -->
        <div class="d-flex align-items-center mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bookmark text-primary me-3" viewBox="0 0 16 16">
                <path d="M2 2v13.5l6-3.5 6 3.5V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1z"/>
            </svg>
            <h2 class="h4 mb-0 text-primary">Últimas Postagens</h2>
        </div>
        <hr class="border border-primary mb-4">

        <!-- Grid de Postagens -->
    </div>
    <br>
</section>
<br>
<!-- Seção Equipe -->
<section class="py-5">
    <div class="container text-center">
        <!-- Título -->
        <h1 class="display-4 text-success mb-4">EQUIPE DE PESQUISADORES</h1>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="images/11.jpg" alt="Hebe Morganne Campos Ribeiro" class="rounded-circle shadow mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h2 class="h5 text-dark">Hebe Morganne Campos Ribeiro</h2>
                    <p class="font-weight-bold text-primary">Coordenadora Geral</p>
                    <a href="http://lattes.cnpq.br/2399134205919272" class="text-primary mt-1">Lattes</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="" alt="" class="rounded-circle shadow mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h2 class="h5 text-dark">Junior</h2>
                    <p class="font-weight-bold text-primary">Bolsista</p>
                    <a href="#" class="text-primary mt-1">Lattes</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="images/14.png" alt="Caroline Nunes Carr" class="rounded-circle shadow mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h2 class="h5 text-dark">Caroline Nunes Carr</h2>
                    <p class="font-weight-bold text-primary">Bolsista</p>
                    <a href="http://lattes.cnpq.br/4845348191439715" class="text-primary mt-1">Lattes</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="images/Imagem%20do%20WhatsApp%20de%202025-01-31%20à(s)%2010.09.47_75cdc467.jpg" alt="Ivan Junior" class="rounded-circle shadow mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h2 class="h5 text-dark">Ivan Junior</h2>
                    <p class="font-weight-bold text-primary">Bolsista</p>
                    <a href="#" class="text-primary mt-1">Lattes</a>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
                <div class="d-flex flex-column align-items-center">
                    <img src="" alt="" class="rounded-circle shadow mb-3" style="width: 100px; height: 100px; object-fit: cover;">
                    <h2 class="h5 text-dark">Kauan Da Silva Pacheco</h2>
                    <p class="font-weight-bold text-primary">Bolsista</p>
                    <a href="#" class="text-primary mt-1">Lattes</a>
                </div>
            </div>
        </div>
<br>
        <!-- Botão -->
        <div class="mt-4">
            <button class="btn btn-primary btn-lg shadow">Veja a Equipe</button>
        </div>
    </div>
</section>

<br>
<!-- footer -->

<?php
include("footer.php");
?>