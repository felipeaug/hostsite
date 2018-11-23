<?php  
//export.php  
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'parseals_db');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

$output = '';
if(isset($_POST["export"])){
  $query = "SELECT * FROM niveis_acessos";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    $output .= '
    <table class="table" bordered="1">  
    <tr>  
    <th>Identificação</th>  
    <th>Nome</th>  
    <th>Criação</th>
    </tr>
    ';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
     <td>'.$row["id"].'</td>  
     <td>'.$row["nome"].'</td>  
     <td>'.$row["created"].'</td>
     </tr>
     ';
   }
   $output .= '</table>';
   header('Content-Type: application/xls');
   header('Content-Disposition: attachment; filename=cadastros-niveis-usuarios.xls');
   echo $output;
 }
}
?>