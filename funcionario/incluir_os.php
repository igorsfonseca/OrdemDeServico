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
			width: 90%;
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
    <h1>Incluir O.S.</h1>
    <form method="POST" action="gerarnota.php">
     <input type="text" name="nome" size="50px" disabled="disabled" placeholder="Nome"><br>
	<input name="cpf" type="text" id="cpf" required="required" size="15px" placeholder="CPF"/><input type="submit" value="P"><br>
	<input type="text" name="endereco" size="58px" disabled="disabled" placeholder="Endereço"><input type="text" id="cep" name="cep" size="12px" disabled="disabled" placeholder="CEP"><br>
	<input type="text" name="telefone" id="telefone" size="15px" disabled="disabled" placeholder="Telefone"><br>
	<input type="text" name="email" size="40px" disabled="disabled" placeholder="E-mail">
     </form>
</div>
</div>
	</fieldset>
</section>
<?php 
	include 'footer.php';
 ?>
</body>
</html>