<?php
session_start();
ob_start();
$btnCadUsuario = filter_input(INPUT_POST, 'btnCadUsuario', FILTER_SANITIZE_STRING);
if($btnCadUsuario){
	include_once 'conexao.php';
	$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
	//var_dump($dados);
	$dados['senha'] = password_hash($dados['senha'], PASSWORD_DEFAULT);
	
	$result_usuario = "INSERT INTO usuarios (nome, email, usuario, senha) VALUES (
	'" .$dados['nome']. "',
	'" .$dados['email']. "',
	'" .$dados['usuario']. "',
	'" .$dados['senha']. "'
)";
$resultado_usario = mysqli_query($conn, $result_usuario);
if(mysqli_insert_id($conn)){
	$_SESSION['msgcad'] = "Usuário cadastrado com sucesso";
	header("Location: administrativo.php");
}else{
	$_SESSION['msg'] = "Erro ao cadastrar o usuário";
}
}
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

	<title>Cadastro de novo usuário - Parseals</title>
</head>
<body>
	<div class="container">
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<div class="card mb-3">
			<img class="card-img-top" src="images/arquivo.jpg" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title">Cadastrar novo usuário</h5>
			</div>
		</div>
		<form method="post" onsubmit="return valida_cadastro_usuario(this)">
			<div class="form-group">
				<label for="exampleFormControlInput1">Nome</label>
				<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite o nome e o sobrenome">

				<label for="exampleInputEmail1">E-mail</label>
				<input type="text" class="form-control" name="email" id="email" placeholder="Digite o seu e-mail">

				<label for="exampleFormControlInput1">Usuário</label>
				<input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite o usuário">

				<label for="exampleFormControlInput1">Senha</label>
				<input type="password" class="form-control" name="senha" id="senha" placeholder="Digite a senha"><br><br>

				<input type="submit" class="btn btn-success" name="btnCadUsuario" value="Cadastrar">
				<input type="reset" class="btn btn-danger" name="Limpar" value="Limpar">
			</div>
		</form>
	</div>
	<script>

		function valida_cadastro_usuario(){
			if (document.getElementById("nome").value.length < 3){
				alert('Favor inserir um nome');
				document.getElementById("nome").focus();
				return false;
			}

			if (document.getElementById("email").value.length < 3){
				alert('Favor e-mail válido');
				document.getElementById("email").focus();
				return false;
			}

			if (document.getElementById("usuario").value.length < 3){
				alert('Favor inserir um nome no usuário');
				document.getElementById("usuario").focus();
				return false;
			}

			if (document.getElementById("senha").value.length < 3){
				alert('Favor inserir uma senha');
				document.getElementById("senha").focus();
				return false;
			}

			else {
				alert('Usuário inserido com sucesso!');
			}
		}
	</script>
</body>
</html>