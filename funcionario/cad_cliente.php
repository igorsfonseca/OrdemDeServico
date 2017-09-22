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
		}		fieldset{
			margin-top: 15%;

		}	
		h1{
			color: black;
			margin-bottom: 5%;
		}
	</style>
	<script type="text/javascript">
		function cadastro(){
			setTimeout("window.location='index.php'",3000);
		}
		function errocpf(){
			setTimeout("window.location.href='index.php'",1000);
		}
	</script>
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
	<?php
	include 'conexao.php';

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	
$sql = mysqli_query($con, "SELECT * FROM clientes WHERE cpf = '{$cpf}'") or print mysql_error();

if (mysqli_num_rows($sql)>0) 
{
	echo 'CPF ja cadastrado no sistema!';
	echo "<script>errocpf()</script>";
} else {
	$sql = "INSERT INTO clientes (nome, cpf, endereco, cep, telefone, email) VALUES ('$nome','$cpf','$endereco','$cep','$telefone','$email')";
	$query = mysqli_query($con,$sql);
	if($query){
	echo "<h1 align='center'>Cliente cadastrado com sucesso!</h1>";
	echo "<script>cadastro()</script>";
	}else{
	echo "Erro ao cadastrar!";
	echo "<script>location.href='clientes.php'</script>";
}
}

?>
	</fieldset>
</section>

</body>
</html>