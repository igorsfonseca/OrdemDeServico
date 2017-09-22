<?php header("Content-type: text/html; charset=utf-8"); 
include 'conexao.php';
?>
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
	.ttt{
		display: none;
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
	<fieldset>
	<ul>
      <li><a href="index.php">Incluir Clientes</a></li>
      <li><a href="alterar_cliente.php">Alterar Clientes</a></li>
      <li><a href="incluir_os.php">Incluir O.S.</a></li>
      <li><a href="consulta_nota_fiscal.php">Alterar O.S.</a></li>
    </ul>
    <h1>Alterar Clientes</h1>
<?php 
					  				$sql = mysqli_query($con, "Select * from clientes") or die(mysql_error);
					  				while ($row = mysqli_fetch_array($sql)) {
							
					  				echo "
					  				<div class='form-group'>
					  				<form method='POST' action='deletar_clientes.php'>
									<div class='ttt'><label>ID: </label> <input name='id' id='nomeid' type='text'  value='". $row['id'] ."' size='1' ></br></div>
					  				<input type='text' name='nome' value='". $row['nome'] ."' size='80' ></br>
					  				<input type='text' name='cpf' id='cpf' value='". $row['cpf'] ."' size='12'></br>
					  				<input type='text' id='endereco' name='endereco' value='". $row['endereco'] ."'size='58'>
					  				<input type='text' name='cep' id='cep' value='". $row['cep'] ."'size='12'></br>
					  				<input type='text' id='telefone' name='telefone' value='". $row['telefone'] ."'size='15'></br>
					  				<input type='text' name='email' value='". $row['email'] ."'size='40'></br><br>
									
					  				" ; 
									echo "<input type='submit' value='Alterar' name='acao[alterar]'>";
									echo "<input type='submit' value='Excluir' name='acao[excluir]'>";
									echo "</form>";
									echo "<hr align='center' size='10' width='100%' color='black'>
									</div>";
					  						
											
					  					}
					  						
					  					
					  				?>
	</fieldset>
</section>
</body>
</html>