<?php
session_start();
include('verifica_login.php');
echo "Usuario: ". $_SESSION['usuarioNome'];
echo "<br>Identificação de nível: " . $_SESSION['usuarioNiveisAcessoId'];

$nivel_necessario = 1;

if (isset($_SESSION['usuarioNome']) && ($_SESSION['usuarioNiveisAcessoId'] > $nivel_necessario)){
	session_destroy();
	header("Location: index.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/style.css">
	<title>Painel - Bem vindo <?php echo $_SESSION['usuarioNome']; ?></title>
</head>

<body>
	<div class="container">
		<?php
		include("includes/navbar-administrativo.php");
		?>
	</div>
</body>
<script src="js/bootstrapjquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/proper.js"></script>
</html>