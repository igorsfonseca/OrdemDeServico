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

	setTimeout("window.location='usuario.php'", 1000); 
		}
		function errousuario(){
			setTimeout("window.location.href='usuario.php'",1000);
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
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = mysqli_query($con, "SELECT * FROM funcionario WHERE email = '{$email}'") or print mysql_error();
$sqll = mysqli_query($con, "SELECT * FROM funcionario WHERE usuario = '{$usuario}'") or print mysql_error();
$cp = mysqli_query($con, "SELECT * FROM funcionario WHERE cpf = '{$cpf}'") or print mysql_error();

if (mysqli_num_rows($sql)>0) 
{
	echo '<h1 align="center">E-mail ja cadastrado no sistema!</h1>';
	echo "<script>errousuario()</script>";
} else if (mysqli_num_rows($sqll)>0) 
{
	echo '<h1 align="center">Usuário ja cadastrado no sistema!</h1>';
	echo "<script>errousuario()</script>";
} else if (mysqli_num_rows($cp)>0) 
{
	echo '<h1 align="center">CPF ja cadastrado no sistema!</h1>';
	echo "<script>errousuario()</script>";
} else{
$query = mysqli_query($con, "INSERT INTO funcionario (nome, cpf, endereco, cep, telefone, email, usuario, senha) VALUES 
('$nome','$cpf','$endereco','$cep','$telefone','$email','$usuario','$senha')");
if($query){
	echo "<h1 align='center'>Usuário cadastrado com sucesso!</h1>";
	echo "<script>admpainel()</script>";
}else{
	echo "<h1 align='center'>Erro ao cadastrar!</h1>" . mysqli_error($con);
	echo "<script>admpainel()</script>";
}
}
?>
</fieldset>
</section>
</body>
</html>
