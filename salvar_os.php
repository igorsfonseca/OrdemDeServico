<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Funcionário</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
		function admpainel(){
			setTimeout("window.location.href='consulta_nota_fiscal.php'",2000);
		}
	</script>
	<style type="text/css">
		body{
		background-image: url('img/body.jpg');
		background-repeat: no-repeat;
		background-size: 100% 100% 100% 100%;
}
	fieldset{
		height: 400px;
	}
	h1{
		font-size: 30px;
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
	<?php
include 'conexao.php';
	$id = $_POST['id'];
    $situacao = $_POST['situacao'];

	$sql = mysqli_query($con,"UPDATE os SET situacao = '$situacao'WHERE id = '$id'");
	if($sql){
		?><h1 align="center"><?php
		echo "Salvo com sucesso!";
		echo "<script>admpainel()</script>";
	}else{
		echo "Erro ao alterar!";
		echo "<script>admpainel()</script>";
	}
?>
	</fieldset>
</section>
<?php 
	include 'footer.php';
 ?>
</body>
</html>