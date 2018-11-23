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
    <title>Painel | Cadastros de usuários - Bem vindo <?php echo $_SESSION['usuarioNome']; ?></title>
</head>
<body>
    <div class="container">
        <?php
        include("includes/navbar-administrativo.php");
        ?>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <a class="btn btn-success" href="cadastrar-usuario.php">Cadastrar novo usuário</a>
            </div>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Identificação</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nível de acesso</th>
                    <th scope="col">Criação</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM usuarios";
                $conn = $conn->query($sql);

                if($conn) {
                    while($row = $conn->fetch_assoc()) {
                        echo "
                        <tr>
                        <td># ".$row['id']."</td>
                        <td>".$row['nome']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['niveis_acesso_id']."</td>
                        <td>".$row['created']."</td>
                        <td>                             
                            <a href='editar-usuarios.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                            <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a></td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/proper.js"></script>
</body>
</html>