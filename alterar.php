
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
		.link{
			margin-left: 5%;
		}
		.ttt{
		display: none;
		}fieldset label{
			font-size: 20px;
		}
		h2{
			text-align: center;
		}
		fieldset form{
			margin-left: 10%;
		} 
		fieldset form input {
		padding: 5px;
		font-size: 20px;
		}
	</style>
</head>
<body>
<header>
	<?php
session_start();
if (!isset($_SESSION['login']) && !isset($_SESSION['senha'])) {
header("location: index.php");
exit;
}else{ 
	echo "<label>Funcionário: " .$_SESSION['login'] . "</label>";
}
	?>
	<a href="sair.php">Sair</a>
	</header>

<section>
	<fieldset>
		<ul>
      <li><a href="painel.php">Funcionários</a></li>
      <li><a href="clientes.php">Clientes</a></li>
      <li><a href="servicos.php">Serviços</a></li>
      <li><a href="os.php">Ordem de Serviço</a></li>
    </ul>
    <br/>
	 <h2>Alterar Funcionário</h2>
<?php 
include 'conexao.php';
		$sql = mysqli_query($con, "Select * from funcionario") or die(mysql_error);
		while ($row = mysqli_fetch_array($sql)) {
										
		echo "
		<form method='POST' action='deletar.php'>
		<label>ID: </label> <input name='id' id='nomeid' type='text'  value='". $row['id'] ."' size='1' ></br>
		<label>Funcionario: </label><br> <input type='text' name='login' value='". $row['usuario'] ."' size='80' ></br>
		<label>E-mail: </label><br> <input type='text' name='email' value='". $row['email'] ."'size='80'></br>
		<label>Senha: &nbsp;</label><br> <input type='password' name='senha' value='". $row['senha'] ."'size='25'></br><br>" ; 
		echo "<input type='submit' value='Alterar' name='acao[alterar]'>";
		echo "<input type='submit' value='Excluir' name='acao[excluir]'>";
		echo "</form>";
		echo "<hr align='center' size='10' width='100%' color='blue'>";
					  						
											
					  					}
					  						
					  					
					  				?>
	</fieldset>
</section>
</body>
</html>

