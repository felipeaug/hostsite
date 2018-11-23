<?php  
//export.php  
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'parseals_db');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

$output = '';
if(isset($_POST["export"])){
  $query = "SELECT * FROM banco_email_mkt";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result) > 0)
  {
    $output .= '
    <table class="table" bordered="1">  
    <tr>  
    <th>Identificação</th>  
    <th>E-mail</th>  
    <th>Data de cadastro</th>
    </tr>
    ';
    while($row = mysqli_fetch_array($result))
    {
     $output .= '
     <tr>  
     <td>'.$row["idBancoEmailMkt"].'</td>  
     <td>'.$row["emailBancoMkt"].'</td>  
     <td>'.$row["dataCadastroEmailMkt"].'</td>
     </tr>
     ';
   }
   $output .= '</table>';
   header('Content-Type: application/xls');
   header('Content-Disposition: attachment; filename=cadastros-emails.xls');
   echo $output;
 }
}
?>