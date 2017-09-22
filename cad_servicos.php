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
		background-size: 100%;
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
	 <h2>Incluir Serviço</h2>
<form action="cadastrando_servicos.php" method="POST">
<label>Serviço:</label><br>
<input type="text" name="servico" size="80px" required="required"><br>
<label>Preço R$:</label><br>
<input type="text" name="valor" size="8px" required="required"><br><br>
<input type="submit" value="Cadastrar">
</form>
	</fieldset>
</section>
</body>
</html>

