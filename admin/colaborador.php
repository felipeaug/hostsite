<?php
	session_start();
	echo "Usuario: ". $_SESSION['usuarioNome'];
	include('verifica_login.php');
?>
<br>
<a href="sair.php">Sair</a>