<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function cadastro(){
			setTimeout("window.location='servicos.php'",3000);
		}
	</script>
	<style type="text/css">
		h1{margin-top: 15%;}
	</style
</head>
<body>
<?php
	include 'conexao.php';

	session_start();

	$servico = $_POST['servico'];
	$valor = $_POST['valor'];

	$sql = "INSERT INTO servicos (servico, valor) VALUES ('$servico', '$valor')";

	$query = mysqli_query($con,$sql);
	if($query){
	echo "<h1 align='center'>Serviço cadastrado com sucesso!</h1>";
	echo "<script>cadastro()</script>";
	}else{
	echo "Erro ao cadastrar!";
	echo "<script>cadastro()</script>";
}
?>
</body>
</html>