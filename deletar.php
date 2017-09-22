
</body>
</html>
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
			margin-top: 15%;

		}	
		h1{
			color: black;
			margin-bottom: 5%;
		}
	</style>
	<script type="text/javascript">
		function admpainel(){

	setTimeout("window.location='alterar.php'", 1000); 
		}
		function errousuario(){
			setTimeout("window.location.href='alterar.php'",1000);
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
<?php
echo '<section><fieldset>';
include 'conexao.php';
$id = $_POST['id'];
$user = $_POST['login'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (isset($_REQUEST['acao'])) { 
$acao = key($_REQUEST['acao']); 
switch ($acao) {  
case 'alterar': 
	$sql = mysqli_query($con,"UPDATE funcionario SET usuario = '$user', email = '$email', senha = '$senha' WHERE id = '$id'");
	if($sql){
		?><h1 align="center"><?php
		echo "Alterado com sucesso!";
		echo "<script>admpainel()</script>";
	}else{
		echo "Erro ao alterar!";
		echo "<script>admpainel()</script>";
	}
	?></h1><?php
break; 
case 'excluir': 
		$sql = mysqli_query($con,"DELETE FROM funcionario WHERE id = '$id'");
	if($sql){
		?><h1 align="center"><?php
		echo "Excluido com sucesso!";
		echo "<script>admpainel()</script>";
	}else{
		echo "Erro ao excluir!" or die(mysqli_error($con));
		echo "<script>admpainel()</script>";
	}
	?></h1><?php
break; 
} 
}
?>
</fieldset>
</section>
</body>
</html>
