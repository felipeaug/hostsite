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
                    <th scope="col">E-mail</th>
                    <th scope="col">Data de cadastro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM banco_email_mkt";
                $conn = $conn->query($sql);

                if($conn) {
                    while($row = $conn->fetch_assoc()) {
                        echo "
                        <tr>
                        <td># ".$row['idBancoEmailMkt']."</td>
                        <td>".$row['emailBancoMkt']."</td>
                        <td>".$row['dataCadastroEmailMkt']."</td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <button type="button" class="btn btn-lg btn-success" title="aaaaa" onclick="exibirAjuda()">Suporte</button>
                    <script type="text/javascript">
                        function exibirAjuda() {
                            alert('Nessa tela você pode imprimir o download em vários formatos');
                        }
                    </script>
                </div>
            </div>    
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form method="post" action="downloads/Excell/download-emails-cadastrados.php">
                       <input type="submit" name="export" class="btn btn-outline-primary" value="Download para Excell" />
                   </form>
               </div>
               <div class="col-sm">
                <button type="button" class="btn btn-outline-primary">Download para PDF</button>
            </div>
            <div class="col-sm">
                <button type="button" class="btn btn-outline-primary">Download para Imagem</button>
            </div>
        </div>    
    </div>
</div>
<script src="js/bootstrapjquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/proper.js"></script>
</body>
</html>