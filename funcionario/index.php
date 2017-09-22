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
    <h1>Cadastro de Clientes</h1>
    <form action="cad_cliente.php" method="POST">
<input type="text" name="nome" size="50px" required="required" placeholder="Nome"><br>
<input name="cpf" type="text" id="cpf" required="required" size="15px" placeholder="CPF"/><br>
<input type="text" name="endereco" size="58px" required="required" placeholder="Endereço"><label>CEP:</label><input type="text" id="cep" name="cep" size="12px" required="required" placeholder="CEP"><br>
<input type="text" name="telefone" id="telefone" size="15px" required="required" placeholder="Telefone"><br>
<input type="text" name="email" size="40px" required="required" placeholder="E-mail"><br>
<input type="submit" value="Cadastrar">
</form>
	</fieldset>
</section>
<?php 
	include 'footer.php';
 ?>
</body>
</html>