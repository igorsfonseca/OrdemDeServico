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
	fieldset{
		height: 400px;
	}
	h1{
		font-size: 30px;
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
    <h1 style="font-size: 30px;">Consultar O.S.</h1>
   <form method="POST" action="consultar_notafiscal.php">
	
	<label style="font-size: 23px;">Nota Fiscal: <input type='number' id='codigo' name='codigo' size='10' required="required" /></<label>

	<input type="submit" value="Consultar">
	</label><br><br>
	<a href="consulta_nota_data.php">Consultar por data </a>
</form>
	</fieldset>
</section>
<?php 
	include 'footer.php';
 ?>
</body>
</html>