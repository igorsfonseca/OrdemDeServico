<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Funcionário</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="funcionario/css/style.css">
	<style type="text/css">
		body{
		background-image: url('img/body.jpg');
		background-repeat: no-repeat;
		background-size: 100%;
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
      <li><a href="#">Funcionários</a></li>
      <li><a href="#">Clientes</a></li>
      <li><a href="#">Serviços</a></li>
      <li><a href="#">Ordem de Serviço</a></li>
    </ul>
    
    <div class="link">
    	<a href="">Incluir Funcionário</a> <a href="">Alterar Funcionário</a>
    </div>
</form>
	</fieldset>
</section>
<?php 
	include 'footer.php';
 ?>
</body>
</html>