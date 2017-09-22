<?php header("Content-type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	body{
		background-image: url('img/body.jpg');
		background-repeat: no-repeat;
		background-size: 100%;
}
	fieldset{
		font-size: 17px;
		width: 420px;
		height: 360px;
		margin: 0 auto;
		margin-top: 12%;
		background-color: rgba(255,255,255,0.9);
		border-radius: 10px;
		border: 1px solid white;
	}
	footer{
		text-align: right;
		position: absolute;
		width: 100%;
		bottom: 0;
		height: 30px;
		background-color: rgba(0,0,0,0.6);
	}
	footer a{
		text-decoration: none;
		margin-right: 3%;
		color: white;
	}
	fieldset img{
		margin-top: 3%;
		margin-left: 30%;
		width: 150px;
		height: 80px;
	}
	fieldset input{
		margin-top: 4%;
		margin-left: 8%;
		margin-right: 5%;
		border: 1px solid #AAA;
		border-radius: 5px;
	}
	input{
		font-size: 18px;
		padding: 2%;
		width: 78%;
	}
	fieldset a{
		text-decoration: none;
		color: #000FFF;
		margin-left: 8%;
	}
	fieldset a:hover {
		-webkit-transition: 0.3s;
		color: #00008B;
	}
	.inp{
		background-color: #000FFF;
		cursor: pointer;
		width: 83%;
		font-size: 20px;
		color: white;
		-webkit-transition: 0.3s;
	}
	.inp:hover {
		background-color: #00008B;
		-webkit-transition: 0.3s;
	}
	</style>
	<style type="text/css">
		h1{
			margin-top: 18%;
			color: white;
		}
	</style>
	<script type="text/javascript">
		function admpainel(){

	setTimeout("window.location='painel.php'", 2000); 
}
function erro(){

	setTimeout("window.location='index.php'", 2000); 
}
function funcionario(){
	setTimeout("window.location='funcionario/index.php'",2000)	
}



	</script>
</head>
<body>
<?php 	
include('conexao.php');

$login =  $_POST['login'];
$senha =  $_POST['senha'];

$sql = mysqli_query($con, "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'")or die(mysqli_error);
$sqll = mysqli_query($con, "SELECT * FROM funcionario WHERE usuario = '$login' AND senha = '$senha'")or die(mysqli_error);
$row = mysqli_num_rows($sql);
$roww = mysqli_num_rows($sqll);

if($row > 0){
	session_start();
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "<p>Autenticanção válida. Aguarde!</p>";
	echo "<script>admpainel()</script>";

} else if($roww > 0){
	session_start();
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['senha'] = $_POST['senha'];
	echo "<p>Autenticanção válida. Aguarde!</p>";
	echo "<script>funcionario()</script>";

} else{
	echo "<p class='letra'>Usuário ou senha inválidos!</p>";
	echo "<script>erro()</script>";

}


?>
</h1>
<footer>
	 <a href="http://itecconsultoria.hol.es" target="_black">&copy;2017 Itecconsultoria</a>
</footer>
</body>
</html>
