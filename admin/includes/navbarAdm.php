<p class="text-right">						
	<?php
	session_start();
	if(!empty($_SESSION['id'])){
		echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";

	}else{
		$_SESSION['msg'] = '<div class="alert alert-danger" role="alert">
		Favor realizar o login para continuar
		</div>';
		header("Location: login.php");	
	}
	?>
	<a class="btn btn-danger" href="sair.php">Sair</a>
</p>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a class="navbar-brand" href="administrativo.php">Painel Administrativo</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavDropdown">
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" href="relatorioFaleConosco.php">Início</a>
			</li>			
			<li class="nav-item">
				<a class="nav-link" href="relatorioFaleConosco.php">Relatório fale conosco</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opções</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="cadastrar.php">Cadastrar novo usuário</a>
					<a class="dropdown-item" href="#">Editar/Excluir usuário</a>
				</div>
			</li>
		</ul>
	</div>
</nav>