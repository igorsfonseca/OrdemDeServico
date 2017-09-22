<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Funcionário</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    body{
    background-image: url('img/body.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
} 
  fieldset img{
    margin-left: 20%;
  }
  fieldset label{
    font-size: 20px;
  }
  fieldset h2{
    font-size: 20px;
  }
  fieldset input{
    border: 0;
    font-size: 20px;
  }
  fieldset{
    width: 60%;
    background-color: white;
  }
  .h{
    text-align: center;
    margin-top: 30%;
    margin-bottom: 30%;
  }
  .sumir{
    display: none;
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
  fieldset form{
    margin-left: 10%;
  }
  </style>
   <script type="text/javascript">
    function cpfin(){
      setTimeout("window.location.href='cad_os.php'",1000);
    }
  </script>
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
$cpf = $_POST['cpf'];
if(strlen($cpf) != 11){
  echo "CPF Inválido";
  echo "<script>cpfin()</script>";
}else{
    $cliente = mysqli_query($con, "SELECT * FROM clientes WHERE cpf = '$cpf'") or print mysql_error();
    $serv = mysqli_query($con, "SELECT * FROM servicos")or print mysql_error();
    if($row = mysqli_fetch_array($cliente)){
      echo "
                        <fieldset>
                        <form method='POST' action='salvarnota.php'>
                        <img src='img/logo.png'><br/><br/>
                        <label>Cliente: </label> <input type='text' name='nome' value='". $row['nome'] ."'  size='50'></br>
                        <label>CPF: </label> <input type='text' name='cpf' value='". $row['cpf'] ."' size='50' ></br>
                        <label>Endereço: </label> <input type='text' name='endereco' value='". $row['endereco'] ."' size='50' ></br>
                        <label>CEP: </label> <input type='text' name='cep' value='". $row['cep'] ."' size='50' ></br>
                        <label>Telefone: </label> <input type='text' name='telefone' value='". $row['telefone'] ."' size='50' ></br>
                        <label>E-mail: </label> <input type='text' name='email' value='". $row['email'] ."' size='50'></br>
                        " ;
                        
                        $data = date("Y/m/d");
                        $dat = date("Y-m-d");
                        $data1 = implode("/",array_reverse(explode("-",$dat)));
                        echo "<div class='sumir'><input type='text' name='data' value='". $data ."'></div>";
                        echo "<label>Data: </label> <input type='text' value='". $data1 ."'  size='50'></br>";
                        ?>
                        <h2>Tipo de Serviço:
          <select name="servicoss">
          <option value="0"></option>
          <?php
           while($ser = mysqli_fetch_array($serv)){
            echo '
          <option value="'.$ser['id'].'">'.$ser['servico'].'</option>
        ';

      }
        ?></select></h2>
        <h2>Valor: R$<input type="number" name="valor" placeholder="0,00" style="padding-left: 1%;"></h2>
        <h2>Atividades: <br/><textarea name="atividades" cols="60" rows="5"></textarea></h2>
        <?php
      echo '<div class="botao"><input type="submit" value="Gerar"></div></form>';
     echo ' <a href="cad_os.php">Voltar</a>  </fieldset>';
    }else{
      echo '<div class="resolver"><fieldset>';
      echo "<h2>CPF não encontrado!</h2>";
      echo "</fieldset></div>";
      echo "<script>cpfin()</script>";
      
    }

}
?>

</section>
</body>
</html>