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


	<title>Fale com a Parseals, referência em Vedação | Parseals</title>
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
				<img class="card-img-top" src="images/top-pages/top-fale-conosco.jpg" alt="Card image cap">
				<div class="card-body">
					<h5 class="card-title">Venha conhecer nossa loja</h5>
					<p class="card-text">Estamos na Rua Pedro Gusso, 603 no bairro Novo Mundo.</p>
				</div>
			</div>
			<div class="card">
				<div class="row">
					<div class="col">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3601.203034769416!2d-49.30247268441701!3d-25.4982743418386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce34b4403f4f3%3A0x5ff6871526abca63!2sParseals!5e0!3m2!1spt-BR!2sbr!4v1532376904410" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col">
						<form method="post" action="salvar_fale_conosco.php" onsubmit="return valida_fale_conosco(this)">
							<div class="form-group">
								<label for="formGroupExampleInput">Nome:</label>
								<input type="text" class="form-control" id="txtNome" name="txtNome">
							</div>
							<div class="form-group">
								<label for="formGroupExampleInput">Telefone:</label>
								<input type="text" class="form-control" name="txtTelefone" id="txtTelefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
								<script type="text/javascript">$("#txtTelefone").mask("(00) 0000-00009");
							</script>
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput">E-mail:</label>
							<input type="email" class="form-control" id="txtEmail" name="txtEmail" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="formGroupExampleInput">Assunto:</label>
							<input type="text" class="form-control" id="txtAssunto" name="txtAssunto">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Mensagem:</label>
							<textarea class="form-control" id="txtMensagem" name="txtMensagem" rows="3"></textarea>
						</div>
						<button type="submit" class="btn btn-success">Enviar</button>
						<button type="reset" class="btn btn-success">Limpar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</aside>
<script>
	
	function valida_fale_conosco(){
		if (document.getElementById("txtNome").value.length < 3){
			alert('Favor inserir um nome');
			document.getElementById("txtNome").focus();
			return false;
		}

		if (document.getElementById("txtTelefone").value.length < 3){
			alert('Favor inserir um número');
			document.getElementById("txtTelefone").focus();
			return false;
		}

		if (document.getElementById("txtEmail").value.length < 3){
			alert('Favor inserir um e-mail válido');
			document.getElementById("txtEmail").focus();
			return false;
		}

		if (document.getElementById("txtAssunto").value.length < 3){
			alert('Favor inserir um assunto para a mensagem');
			document.getElementById("txtAssunto").focus();
			return false;
		}

		if (document.getElementById("txtMensagem").value.length < 3){
			alert('Favor inserir um conteúdo na mensagem');
			document.getElementById("txtMensagem").focus();
			return false;
		}

		else {
			alert('Mensagem enviada com sucesso!');
		}
	}

</script>
<footer>
	<!-- rodapé -->
	<?php
	include("includes/footer.php");
	?>
</footer>

</body>
</html>