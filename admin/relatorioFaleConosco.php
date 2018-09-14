<?php
    require_once 'conexao.php';
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

    <title>Acesso - Parseals</title>
</head>
<body>
    <?php
    include ('includes/navbarAdm.php');
    ?>

    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Assunto</th>
                <th>Mensagem</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM fale_conosco WHERE active = 1";
            $result = $conn->query($sql);

            //if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>".$row['txtNome']." ".$row['lname']."</td>
                    <td>".$row['age']."</td>
                    <td>".$row['contact']."</td>
                    <td>
                    <a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
                    <a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
                    </td>
                    </tr>";
                //}
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>