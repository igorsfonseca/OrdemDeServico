<?php
include 'conexao.php';
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
$ta = "Igor Fonseca";
// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml('
  <html>
      <head>
      <style>
      img{
        text-align: center;
        width: 90%;
      }
      h1 {color:#333; size:20px; margin-bottom:5px;}
      h3 {color:#222;}
      </style>
      </head>
      <body>
                       <h1>'.$ta.'</h1>
                       <label>Cliente: </label> <input type="text" name="nome" value='. $cliente .'  size="50"><br>
                        <label>CPF: </label> <input type="text" name="cpf" value='. $cpf .' size="50" ><br>
                        <label>Endereço: </label> <input type="text" name="endereco" value='. $endereco .' size="50" ><br>
                        <label>CEP: </label> <input type="text" name="cep" value='. $cep .' size="50" ><br>
                        <label>Telefone: </label> <input type="text" name="telefone" value='. $telefone .' size="50" ><br>
                        <label>E-mail: </label> <input type="text" name="email" value='. $email .' size="50"><br>

</body>
  </html>
');

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('letter', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("cliente.pdf",array('Attachment' => false)

   );
?>