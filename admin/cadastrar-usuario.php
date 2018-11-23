<?php
session_start();
include('verifica_login.php');
require_once 'conexao.php'; 
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
    <title>Painel | Cadastrar novo usuário - Bem vindo <?php echo $_SESSION['usuarioNome']; ?></title>
</head>
<body>
    <div class="container">
        <?php
        include("includes/navbar-administrativo.php");
        ?>
        <form action="criar-novo-usuario.php" method="post">
            <div class="form-group">
                <tr>
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="informe o nome" name="nome">
                </tr>     
                <tr>
                    <label for="formGroupExampleInput">E-mail</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="informe o e-mail" name="email">
                </tr>
                <tr>
                    <label for="formGroupExampleInput">Senha</label>
                    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="informe a senha" name="senha">
                </tr>
                <tr>
                    <label for="inputState">Situação</label>
                    <select id="inputState" class="form-control" name="situacoe_id">
                        <option selected>Ativado</option>
                        <option>Desativado</option>
                    </select>
                </tr>
                <tr>
                    <label for="inputState">Nível</label>
                    <select id="inputState" class="form-control" name="niveis_acesso_id">
                        <option value="1">Administrador</option>
                        <option value="2">Colaborador</option>
                        <option value="3">Cliente</option>
                    </select>
                </tr>
                <tr><br>
                    <td><button class="btn btn-success" type="submit">Salvar usuário</button></td>
                </tr>
            </div>
        </form>
    </div>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/proper.js"></script>
</body>
</html>