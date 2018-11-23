<?php 

require_once 'conexao.php';

if($_POST) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $situacoe_id = $_POST['situacoe_id'];
    $niveis_acesso_id = $_POST['niveis_acesso_id'];
    $created = $_POST['created'];

    $sql = "INSERT INTO usuarios (nome, email, senha, situacoe_id, niveis_acesso_id, created) VALUES ('$nome', '$email', '$senha', '$situacoe_id', '$niveis_acesso_id', now())";
    if($conn->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        header("Location: cadastros-usuarios.php");
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }

    $conn->close();
}

?>