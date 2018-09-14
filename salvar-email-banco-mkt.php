<?php
	require_once 'admin/conexao.php';

	if ($_POST){
		$emailBancoMkt = $_POST['emailBancoMkt'];
		
		$sql = "INSERT INTO banco_email_mkt (emailBancoMkt, dataCadastroEmailMkt) VALUES ('$emailBancoMkt', now())";

		if ($conn -> query ($sql) === TRUE){
			echo "<p>Salvo</p>";
		} else {
			echo "Error" . $sql . '' .$conn -> connect_error;
		}

		$conn -> close();

		header('Location: index.php') ;
	}
?>