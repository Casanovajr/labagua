

<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" href="images/icon.png">
	<title>Company</title>
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
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- CSS da Barra de Acessibilidade -->
	<link href="css/acessibilidade.css" rel="stylesheet" type="text/css" media="all" />
	<!-- JavaScript da Barra de Acessibilidade -->
	<script src="js/acessibilidade.js"></script>
</head>

<style>
  .card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    margin-top: 30px;
  }

  .card {
    width: 250px;
    padding: 20px;
    border-radius: 10px;
    color: #000;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  .card img {
    width: 60px;
    height: 60px;
    margin-bottom: 15px;
  }

  .card h3 {
    font-weight: bold;
    margin-bottom: 10px;
  }

  .card p {
    font-size: 14px;
    margin-bottom: 20px;
  }

  /* Botão padrão */
  .card .btn {
    text-decoration: none;
    padding: 10px 15px;
    font-weight: bold;
    color: #fff;
    border-radius: 4px;
    display: inline-block;
  }

  /* Cores específicas */
  .card.arandu {
    background: linear-gradient(#fff, #ffc076);
  }

  .card.labagua {
    background: linear-gradient(#fff, #8abcf3);
  }

  .card.mosqueiro {
    background: linear-gradient(#fff, #9cf5ec);
  }

  .card.caliqa {
    background: linear-gradient(#fff, #ffeaa7);
  }

  /* Botões com cores específicas */
  .card.arandu .btn {
    background-color: #f18b00;
  }
  .card.labagua .btn {
    background-color: #386cb0;
  }
  .card.mosqueiro .btn {
    background-color: #42d1c0;
  }
  .card.caliqa .btn {
    background-color: #f1b600;
  }

</style>

<body>

	<!-- Barra de Acessibilidade -->
	<div class="accessibility-bar">
		<button class="accessibility-toggle" onclick="toggleAccessibilityBar()">
			<i class="fa fa-universal-access"></i>
		</button>
		<div class="accessibility-tools">
			<button onclick="increaseFontSize()" title="Aumentar fonte">
				<i class="fa fa-font"></i> A+
			</button>

			<button onclick="toggleContrast()" title="Alto contraste">
				<i class="fa fa-adjust"></i>
			</button>

			<button onclick="speakPageContent()" title="Ler página">
				<i class="fa fa-volume-up"></i>
			</button>
			<button onclick="stopSpeaking()" title="Parar leitura">
				<i class="fa fa-stop"></i>
			</button>
		</div>
	</div>

	<!-- /Barra de Acessibilidade -->

	<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
						<li><i class="fa fa-phone" aria-hidden="true"></i>+(55) 91 9 9918-3243 </li>
						<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:contato@labagua.com"> contato@labagua.com</a></li>
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
						<h1><a class="navbar-brand" href="index.php"><img src="images/LabAguaLogo.png" style="width: 200px; height: 150px; " class="img-responsive"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Início</a></li>
                <li><a href="calculadora.php">Calculadoras</a></li>
								<li class="active"><a href="portfolio.php">Produções</a></li>
								<li><a href="blog.php">Projetos</a></li>
								<li><a href="contact.php">Solicitar uma análise</a></li>
							</ul>

						</nav>

					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<h2 class="w3l_head w3l_head1">Calculadoras</h2>
      <div class="card-container">
        <div class="card labagua">

          <h3>Cal.IET</h3>
          <p>Ferramenta para calcular o Índice de Estado Trófico (IET) a partir de parâmetros como fósforo total e clorofila-a.</p>
          <a href="https://aguasdamazonia.com/plataforma/IET/index.html" class="btn">SAIBA MAIS...</a>
        </div>
        <div class="card mosqueiro">

          <h3>Dureza da Agua</h3>
          <p>Ferramenta para calcular a dureza total da água com base nas concentrações de cálcio e magnésio..</p>
          <a href="durezaCalc.html" class="btn">SAIBA MAIS...</a>
        </div>
        <div class="card caliqa">
          <h3>Cal.IQA</h3>
          <p>Ferramenta para calcular o Índice de Qualidade da Água com base em parâmetros específicos.</p>
          <a href="https://aguasdamazonia.com/plataforma/iqa.html" class="btn">SAIBA MAIS...</a>
        </div>
      </div>

      <div class="wthree_gallery_grids">


			</div>
			<script src="js/jzBox.js"></script>
		</div>
	</div>
	<!-- //gallery -->
	<!-- footer -->

	<?php
	include("footer.php");
	?>
