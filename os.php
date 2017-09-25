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
		background-size: 100% 100% 100% 100%;
		}	
		.link{
			margin-left: 4%;

		}
		@media screen and (max-width: 1024px){
		fieldset{
			margin-top: 2%;
			font-size: 20px;
		}
		fieldset ul li{
			margin-left: 1%;
		}
		.link a{
			font-size: 18px;
		padding-right: 3%;
		}

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
    
    <div class="link">
    <a href="cad_os.php">Incluir</a> 
	<a href="consulta_nota_fiscal.php">Consultar</a>
	<a href="os_abertos.php">Abertos</a>
	<a href="os_em_analise.php">Em análise</a> 
	<a href="os_cancelado.php">Cancelados</a>
	<a href="os_concluido.php">Concluidos</a>
    </div>
	</fieldset>
</section>
<?php 
	include 'footer.php';
 ?>
</body>
</html>