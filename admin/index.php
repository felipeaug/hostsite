<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/fonts.css" />
  <link rel="stylesheet" href="css/style.css">
  <meta charset="utf-8" />
  <title>Login - Parseals</title>
</head>

<body>

  <div class="container">
    <div class="container">
      <div class="card mb-3">
        <img class="card-img-top" src="image/top-about.jpg" alt="Card image cap">
      </div>
      <form class="form-signin" method="POST" action="valida.php">
        <h2 class="form-signin-heading" align="center">Área Restrita</h2><br>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="informe seu e-mail" required autofocus><br>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="informe sua senha" required><br>
        <button class="btn btn-lg btn-success btn-block" type="submit">Acessar</button>
      </form>
      <p class="text-center text-danger">
        <?php if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        }?>
      </p>
      <p class="text-center text-success">
        <?php 
        if(isset($_SESSION['logindeslogado'])){
          echo $_SESSION['logindeslogado'];
          unset($_SESSION['logindeslogado']);
        }
        ?>
      </p>
    </div>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/proper.js"></script>
  </body>
  </html>
