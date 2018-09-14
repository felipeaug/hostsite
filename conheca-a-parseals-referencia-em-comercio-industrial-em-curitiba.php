<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" /> <!-- icons footer -->
	<link rel="stylesheet" href="css/style.css" />
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon-parseals.ico">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74994675-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-74994675-1');
	</script>
	<meta name="msvalidate.01" content="28AB6F90148DB314D4AF6E9F7C6D5CD3" />

	<title>Conheça a Parseals, referência em Vedação Usinada | Parseals</title>
</head>
<body>
	<header>
		<!-- top and menu -->
		<?php
		include("includes/navbar.php");
		?>
	</header>

	<aside>
		<div class="container">
			<div class="card mb-3">
				<img class="card-img-top" src="images/top-pages/top-about.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Sobre a Parseals</h5>
				</div>
				<div class="card-group">
					<div class="card">
						<img class="card-img-top" src="images/sobre-empresa.jpg" alt="Card image cap">
						<div class="card-body"><!-- imagem com 259x180 -->
							<h5 class="card-title">Empresa</h5>
							<p class="card-text">Parseals foi criada por profissionais com mais de 10 anos de experiência de mercado, buscando oferecer para seus clientes soluções e alternativas para vedações de cilindros hidráulicos, pneumáticos e toda a linha de suprimentos industriais. A qualidade é o fator principal, e está presente em toda a linha de produtos que representa.</p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="images/sobre-missao.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Missão</h5>
							<p class="card-text"><br>Tem como fator principal o fornecimento de peças para manutenção, visando a total satisfação de nossos clientes, oferecendo um atendimento exclusivo e de qualidade.</p>
						</div>
					</div>
					<div class="card">
						<img class="card-img-top" src="images/sobre-visao.jpg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Visão</h5>
							<p class="card-text"><br>Ser um referencial em qualidade no mercado, no fornecimento de peças e componentes para manutenção industrial.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</aside>

	<footer>
		<!-- rodapé -->
		<?php
		include("includes/footer.php");
		?>
	</footer>
	<script src="js/bootstrapjquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/proper.js"></script>

</body>
</html>