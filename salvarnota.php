<?php


include 'conexao.php';

	$cliente = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$servico = $_POST['servicoss'];
	$valor = $_POST['valor'];
	$atividades = $_POST['atividades'];
  $situacao = "Aberto";
	$data = $_POST['data'];
	if($servico == 0 || $valor == "" || $atividades ==""){
		echo 'Preencha todos os campos';
		echo '<script>location.href="cad_os.php"</script>';
	}
	$ser = mysqli_query($con, "SELECT * FROM servicos WHERE id = '{$servico}'");
	if($row = mysqli_fetch_array($ser)){
		$servico = $row['servico'];
	}

	$query = mysqli_query($con, "INSERT INTO os (cliente,cpf,endereco,cep,telefone,email,servico,valor,atividades,data,situacao) 
		VALUES ('$cliente','$cpf','$endereco','$cep','$telefone','$email','$servico','$valor','$atividades','$data','$situacao')");
$codigo = mysqli_insert_id($con);

	$data = getdate();
$t = mysqli_query($con,"SELECT * FROM os WHERE cliente ='$cliente', cpf ='$cpf', endereco='$endereco', cep='$cep', telefone='$telefone', email ='$email', servico= '$servico', valor='$valor', atividades='$atividades', data='$data'");

require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();


$data1 = date("d/m/Y");
$teste = '<html>
      <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <style>
      img{
        margin-left: 25%;
      }
      h3{
        font-size: 18px;
      }
      h2{
        font-size: 20px;
      }
      hr{
        color: $AAA;
        border: 1px solid #AAA;
      }
      </style>
      </head>
      <body>
                       <img src="img/logo.png"><br/>
                       <h3>Nota Fiscal: ' . $codigo . '</h3>
                       <h3>Data: ' . $data1 . '</h3>
                       <h3>Cliente: '. $cliente .' </h3>
                       <h3>CPF: '. $cpf .' </h3>
                       <h3>Endereço: ' . $endereco .' </h3> 
                       <h3>CEP: ' . $cep . ' </h3>
                       <h3>Telefone: ' . $telefone . '</h3>
                       <h3>E-mail: ' . $email . ' </h3>
                       <hr>
                       <h2>Tipo de servico: ' . $servico . '</h2>
                       <hr>
                       <h2>Valor: R$' . $valor . '</h2>
                       <hr>
                       <h2>Atividades </h2>
                       <h3> ' . $atividades . '</h3>
</body>
  </html>';
$dompdf->loadHtml($teste);

// (Optional) Setup the paper size and orientation
$dompdf->set_paper("A4", "portrail");

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($cliente.".pdf",array('Attachment' => true)

   );
?>