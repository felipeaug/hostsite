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
    <title>Painel | Relatório de e-mails - Bem vindo <?php echo $_SESSION['usuarioNome']; ?></title>
</head>
<body>
    <div class="container">
        <?php
        include("includes/navbar-administrativo.php");
        ?>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Identificação</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Assunto</th>
                    <th scope="col">Mensagem</th>
                    <th scope="col">Data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM fale_conosco ORDER BY dataFaleConosco ASC ";
                $conn = $conn->query($sql);

                if($conn) {
                    while($row = $conn->fetch_assoc()) {
                        echo "
                        <tr>
                        <td># ".$row['id']."</td>
                        <td>".$row['txtNome']."</td>
                        <td>".$row['txtTelefone']."</td>
                        <td>".$row['txtEmail']."</td>
                        <td>".$row['txtAssunto']."</td>
                        <td>".$row['txtMensagem']."</td>
                        <td>".$row['dataFaleConosco']."</td>
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