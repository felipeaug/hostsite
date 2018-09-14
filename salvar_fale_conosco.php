<?php
	require_once 'admin/conexao.php';

	if ($_POST){
		$txtNome = $_POST['txtNome'];
		$txtTelefone = $_POST['txtTelefone'];
		$txtEmail = $_POST['txtEmail'];
		$txtAssunto = $_POST['txtAssunto'];
		$txtMensagem = $_POST['txtMensagem'];

		$sql = "INSERT INTO fale_conosco (txtNome, txtTelefone, txtEmail, txtAssunto, txtMensagem, dataFaleConosco) VALUES ('$txtNome', '$txtTelefone', '$txtEmail', '$txtAssunto', '$txtMensagem', now())";

		if ($conn -> query ($sql) === TRUE){
			echo "<p>Salvo</p>";
		} else {
			echo "Error" . $sql . '' . $conn -> connect_error;
		}

		$conn -> close();

		header('Location: fale-conosco.php');
	}
?>