<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" /> <!-- icons footer -->
	<link rel="stylesheet" href="css/style.css" />
	<script src="js/bootstrapjquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/proper.js"></script>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon-parseals.ico">
	<script type="text/javascript" src="js/jquery.mask.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-74994675-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-74994675-1');
	</script>
	<meta name="msvalidate.01" content="28AB6F90148DB314D4AF6E9F7C6D5CD3" />


	<title>Trabalhe na maior empresa de Vedação de Curitiba | Parseals</title>
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
				<img class="card-img-top" src="images/arquivo.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Trabalhe conosco - Parseals</h5>
					<p class="card-text">Nessa página iremos divulgar vagas disponíveis para trabalhar na empresa de Vedação que mais cresce no Brasil.</p>
					<p class="card-text"><small class="text-muted">Atualizado 11:37 20/07/2018</small></p>
				</div>
			</div>
			<div class="card">
				<div class="row">
					<div class="col">
						<ul><h5>Setores disponíveis:</h5></ul>
						<li>Vendas</li>
						<li>Vendas</li>
						<li>Vendas</li>
						<li>Vendas</li>
					</div>
					<div class="col">
						<form>
							<div class="form-group">
								<label for="formGroupExampleInput">Nome:</label>
								<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">Telefone:</label>
								<input type="text" class="form-control" name="txtTelefone" id="txtTelefone" placeholder="Example input" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
								<script type="text/javascript">$("#txtTelefone").mask("(00) 0000-00009");</script>
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">E-mail</label>
								<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput2">Setor de interesse:</label>
								<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
									<option selected>Choose...</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleFormControlFile1">Anexar currículo:</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
							</div>
							<button type="submit" class="btn btn-primary">Enviar currículo</button>
						</form>
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
</body>
</html>