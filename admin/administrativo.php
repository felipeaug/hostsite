<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="css/styles.css">
	<script src="../js/bootstrapjquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/proper.js"></script>
	<title>Administrativo - Parseals</title>
</head>
<body>
	<?php
		include("includes/navbar-administrativo.php");
	?>

	<br><br><br><br><br>

	<div class="container">
		<div class="jumbotron jumbotron-fluid">
			<div class="container">
				<h1 class="display-4">Bem vindo (a)</h1>
				<p class="lead">
					<?php
					session_start();
						echo "Mestre dos magos, ". $_SESSION['usuarioNome']; 
							if(!isset($_SESSION["usuarioNome"]) and !isset($_SESSION["usuarioNome"])){ 
								header("Location: index.php");
							}else{
								echo", você está logado!";
							}
					?>
				</p>
			</div>
		</div>
	<div class="card-deck">
		<div class="card">
			<img class="card-img-top" src="../images/linhas-produtos.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Acessos ontem</h5>
				<p class="card-text">150</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Atualizado agora</small>
			</div>
		</div>
		<div class="card">
			<img class="card-img-top" src="../images/linhas-produtos.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Acessos hoje</h5>
				<p class="card-text">20</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Atualizado agora</small>
			</div>
		</div>
		<div class="card">
			<img class="card-img-top" src="../images/linhas-produtos.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Total de acesso nesse mês</h5>
				<p class="card-text">1200</p>
			</div>
			<div class="card-footer">
				<small class="text-muted">Atualizado agora</small>
			</div>
		</div>
	</div>
</div>
</body>
</html>
