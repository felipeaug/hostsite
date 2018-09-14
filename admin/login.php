<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.css" />
	<link rel="stylesheet" href="../css/fonts.css" />
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" /> <!-- icons footer -->
	<link rel="stylesheet" href="css/style.css" />
	<script src="../js/bootstrapjquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="../js/proper.js"></script>

	<title>Acesso - Parseals</title>
</head>
<body>
	<?php
	if(isset($_SESSION['msg'])){
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
	}
	?>
	<div class="container">
		<div class="card mb-3">
			<img class="card-img-top" src="images/arquivo.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Parseals</h5>
				<p class="card-text">CNPJ: 21.314.538/0001-40</p>
			</div>
		</div>
		<form method="POST" action="valida.php">
			<div class="form-group">
				<label for="exampleInputEmail1">E-mail:</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usuario" placeholder="Digite seu e-mail">

				<label for="exampleInputEmail1">Senha:</label>
				<input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="senha" placeholder="Digite a sua senha"><br>

				<input type="submit" name="btnLogin" class="btn btn-primary" value="Acessar">
			</div>

		</form>
	</div>
</body>
</html>