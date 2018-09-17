<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="../css/estilos.css">
	<script src="../js/bootstrapjquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/proper.js"></script>
	<title>Acesso - Parseals</title>
</head>
	<body>
		<div class="container"><br><br>
			<img src="images/logo_top_acess.jpg" class="img-fluid" alt="Responsive image">
			<form method="POST" action="valida.php" align="center">
				<div class="form-group"><br>
					<label for="exampleInputEmail1">Email:</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="">
						<small id="emailHelp" class="form-text text-muted">Nós nunca vamos compartilhar seu e-mail com mais ninguém</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Senha:</label>
						<input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="">
				</div>
					<button type="submit" class="btn btn-success">Acessar</button>
			</form>
		</div>
		<p>
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p>
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
	</body>
</html>