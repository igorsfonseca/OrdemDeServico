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
		table tr td{

			font-size: 18px;
		}
		h2{
			text-align: center;
		}
		fieldset form{
			margin-left: 10%;
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
    <h2>Incluir O.S.</h2>
    <form method="POST" action="gerarnota.php">
       <table class="table table-condensed">
       <tr><td>
     Cliente: </td><td><input type="text" name="nome" disabled="disabled" size="80px"></td></tr>
     <tr><td>
     CPF: </td><td><input type="text" name="cpf" id="cpf" size="12px" required="required" maxlength="11"> <input type="submit" value="P" ><tr><td>
     <tr><td>
     Endereço: </td><td><input type="text" size="58px" name="nome" disabled="disabled" > 
     CEP: <input type="text" name="nome" size="10px" disabled="disabled" size="13px"><tr><td>
     <tr><td>
     Telefone: </td><td><input type="text"  size="12px" name="nome" disabled="disabled" ><tr><td>
     <tr><td>
     E-mail: </td><td><input type="text" name="nome" size="80px" disabled="disabled"></td></tr>
     </table>
     </form>
	</fieldset>
</section>
<?php 
	include 'footer.php';
 ?>
</body>
</html>

