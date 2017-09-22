
<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Funcionário</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript">

    function sair(){
      setTimeout("window.location.href='alt_os.php'",2000);
    }
  </script>
  <style type="text/css">
    body{
    background-image: url('img/body.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
  fieldset{
    width: 60%;
    background-color: white;
  }
   fieldset img{
    margin-left: 20%;
  }
  fieldset h3{
    font-size: 20px;
  }
  fieldset h2{
    font-size: 20px;
  }
  fieldset input{
    border: 0;
  }
  fieldset form{
    margin-left: 10%;
  }
  h1{
    font-size: 30px;
  }
  .h{
    text-align: center;
    margin-top: 30%;
    margin-bottom: 30%;
  }
  .resolver fieldset{
      margin-top: 15%;
      margin-bottom: 15%;
    } 
    h2{
      text-align: center;
      color: black;
      margin-bottom: 5%;
    }
  select{
    width: 150px;
  }
  </style>
</head>
<body>
  <header>
  <?php
  session_start();
  echo "<label>Funcionário: " .$_SESSION['login'] . "</label>";
  ?>
  <a href="sair.php">Sair</a>
  </header>

<section>

  <?php
include 'conexao.php';
$data1 = $_POST['inicial'];
$data2 = $_POST['final'];

$data1 = implode("-",array_reverse(explode("/",$data1)));
$data2 = implode("-",array_reverse(explode("/",$data2)));

$sql = mysqli_query($con,"SELECT * FROM os WHERE data BETWEEN '$data1' AND '$data2'");
if(mysqli_num_rows($sql)){
while ($row = mysqli_fetch_array($sql)){
  $row['data'] = implode("/",array_reverse(explode("-",$row['data'])));
  echo '               
                        <fieldset>
                       <img src="img/logo.png"><br/>
                       <h3>Nota Fiscal: ' . $row['id'] .'</h3>
                       <h3>Data: ' . $row['data'] . '</h3>
                       <h3>Cliente: '. $row['cliente'] .' </h3>
                       <h3>CPF: '. $row['cpf'] .' </h3>
                       <h3>Endereço: ' . $row['endereco'] .' </h3> 
                       <h3>CEP: ' . $row['cep'] . ' </h3>
                       <h3>Telefone: ' . $row['telefone'] . '</h3>
                       <h3>E-mail: ' . $row['email'] . ' </h3>
                       <hr>
                       <h2>Tipo de servico: ' . $row['servico'] . '</h2>
                       <hr>
                       <h2>Valor: R$' . $row['valor'] . '</h2>
                       <hr>
                       <h2>Atividades </h2>
                       <h3> ' . $row['atividades'] . '</h3>';
                       echo '<h3 style="cursor: no-drop;">Situação: ' . $row['situacao'] . '</h3>';
                       echo "<div class='espaco'>&nbsp;</div>";


}
  
echo "<a href='alt_os.php'>Voltar</a>";
echo "</fieldset>";
}else {
  echo "<div class='resolver'><fieldset>";
  echo "<h2>Nenhum registro encontrado.</h2>";
  echo "</fieldset>";
  echo "<script>sair()</script>";
}
?>
  </fieldset>
</section>
</body>
</html>
