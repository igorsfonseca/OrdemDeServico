<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nota Fiscal</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <style>
  .espaco{
    margin-top: 5%;
  }
  .esp{
    margin-top: 1%;
    margin-bottom: 1%;
  }
  select{
    font-size: 18px;
    width: 150px;
  }
  input{
    font-size: 18px;
    border-radius: 5px;
    padding: 5px;
    border: 0;
    cursor: pointer;
  }
  a{
    border: 2px solid #AAA;
    background-color: #AAA;
    padding: 5px;
    border-radius: 5px;
    padding: 5px;
    text-decoration: none;
    color: black;
  }
  .ta input{
    border: 0;
    cursor: no-drop;
    font-size: 16px;
  }
  table thead tr th{
    text-align: center;
  }
   table{
    margin-top: 3%;
    text-align: center;
  }
  .top{
    width: 100%;
  background-color: #000fFF;
  color: white;
  padding: 1%;
  }
  .sair a{
    border: 0;
    background-color: #000fFF;
  float: right;
  width: 50px;
  margin-top: -25px;
  color: white;
  font-size: 18px;
  border-radius: 5px;
}
.sair :hover{
  cursor: pointer;
  color: black;

}
.saiu{
  float: right;
  font-size: 18px;
  margin-right: 0%;
}
.corpo{
    margin-left: 3%;
    margin-right: 3%;

}
  </style>
  <script type="text/javascript">
    function nenhum(){
      setTimeout("window.location.href='consulta_nota_fiscal.php'",1000);
    }
  </script>
</head>
<body>
  <div class="top">
  <?php
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
header("location: index.php");
exit;
}else{ 
echo "<h4>Usuário: " .$_SESSION['login'];
echo '<div class="sair"><a href="sair.php"><label onclick="sair">Sair</label></a></div>
</div>';
}
?>
<div class="corpo">
  <h2>Relatório de Ordem de Serviço Aberta</h2>
<table class="table table-bordered">
  <thead>
  <tr>
  <th>Nota Fiscal</th>
  <th>Data</th>
  <th>Cliente</th>
  <th>CPF</th>
  <th>Valor</th>
  <th>Situação</th>
  <th>Ação</th>
  </tr>
  </thead>
  <tbody>
<?php
include 'conexao.php';
$sql = mysqli_query($con,"SELECT * FROM os WHERE situacao = 'Aberto'");
if(mysqli_num_rows($sql)>0){
while ($row = mysqli_fetch_array($sql)){
  $row['data'] = implode("/",array_reverse(explode("-",$row['data'])));
	echo '  

    <tr>
    <td>' . $row['id'] .'</td>
    <td>' . $row['data'] .'</td>
    <td>' . $row['cliente'] .'</td>
    <td>' . $row['cpf'] .'</td>
    <td>R$ ' . $row['valor'] .'</td>
    <td>' . $row['situacao'] .'</td>
    <td><a href="javascript:void(0);">Abrir</a></td>
  </tr>';
}
echo "</tbody></table>";
?>

<?php 
$searc= mysqli_query ($con,"SELECT valor FROM os WHERE situacao = 'Aberto'")  or die (mysql_error());

$soma_das_visu = 0;
while ($rows = mysqli_fetch_array($searc)) {
$soma_das_visu += $rows['valor']; 
}
?>

<?php
echo '<a href="os.php">Voltar</a>';
echo '<div class="saiu">Valor Total: R$ ' . $soma_das_visu . ' </div>
</div>';
 echo "<div class='esp'>&nbsp;</div>";
}else {
  echo "<h1 align='center'>Nenhum registro!</h1>";
  echo "<script>nenhum()</script>";
}


?>
</div>
</body>
</html>