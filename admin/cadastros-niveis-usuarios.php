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
                    <th scope="col">Criação</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM niveis_acessos";
                $conn = $conn->query($sql);

                if($conn) {
                    while($row = $conn->fetch_assoc()) {
                        echo "
                        <tr>
                        <td># ".$row['id']."</td>
                        <td>".$row['nome']."</td>
                        <td>".$row['created']."</td>
                        <td> ┗(▀̿Ĺ̯▀̿ ̿)┓ </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
                    <script>
                        $(function () {
                          $('[data-toggle="popover"]').popover()
                      })

                        $(function () {
                          $('.example-popover').popover({
                            container: 'body'
                        })
                      })
                  </script>
              </div>
          </div>    
      </div>
      <div class="container">
        <div class="row">
            <div class="col-sm">
                <form method="post" action="downloads/Excell/download-cadastros-niveis-usuarios-excell.php">
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