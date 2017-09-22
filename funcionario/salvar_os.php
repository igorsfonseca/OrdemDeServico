<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body{
	background-color: #DDD;
	font-size: 18px;
}
		h1{margin-top: 15%;}
	</style>
	<script type="text/javascript">
		function admpainel(){

	setTimeout("window.location='consulta_nota_fiscal.php'", 1000); 
}
	</script>
	<title></title>
</head>
<body>
<?php
include 'conexao.php';

session_start();
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
</body>
</html>
