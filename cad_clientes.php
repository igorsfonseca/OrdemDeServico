
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
			margin-left: 5%;
		}
		form{
			width: 90%;
		}
		table{
			width: 90%;
		}
		table tr td{
			font-size: 18px;
		}
		.end input{
			width: 55%;
		}
		.cep input{
			width: 20%;
		}
		h2{
			text-align: center;
			margin-top: 3%;
		}
		table{
			margin-left: 5%;
		}
		.tab{
			margin-left: 5%;
		}
		.tabela input{
			width: 80%;
		}
		@media screen and (max-width: 1024px){
		fieldset{
			margin-top: 2%;
			font-size: 19px;
		}
		fieldset ul li{
			margin-left: 1%;
		}
		table tr td{
			width: 70px;
		}
		.tabela input{
			width: 95%;
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
    <h2>Incluir Cliente</h2>
    <form action="cadastro_cliente.php" method="POST">
    <table class="table table-condensed">
    <tr><td>
     Nome: </td><td><div class="tabela"><input type="text" name="nome"  required="required"></div></td></tr>
     <tr><td>
     CPF: </td><td><input type="number" name="cpf" id="cpf" size="12px" maxlength="11" required="required"></td></tr>
     <tr><td>
     Endereço: </td><td><input type="text" size="40px" name="endereco" required="required"> 
     CEP: <input type="text" name="cep" size="8px" size="13px" required="required"></td></tr>
     <tr><td>
     Telefone: </td><td><input type="text"  size="12px" name="telefone" required="required"></td></tr>
     <tr><td>
     E-mail: </td><td><input type="text" name="email" required="required"></td></tr>
     </table>
     <input type="submit" value="Cadastrar" class="tab">
     </form>
	</fieldset>
</section>
</body>
</html>









