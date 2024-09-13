<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - exercício 7 - listaL1 - resposta do servidor </h1>
 <?php
  //usando constantes para representarmos as taxas de desconto e acréscimo
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);

  $valorCompra = $_POST['valor-compra'];

  //fazendo o PHP testar se um botão de rádio (de um conjunto de botões) foi, ou não foi, marcado
  $escolheuModalidadePagamento = isset($_POST['modalidade-pagamento']);
  $escolheuEntregaDomicilio = isset($_POST['entrega-domicilio']);

  //testar se os botões foram acionados no formulário
  if(!$escolheuModalidadePagamento OR !$escolheuEntregaDomicilio)
   {
   exit("<p> Você deve fornecer as informações relacionadas à modalidade de pagamento e entrega da compra a domicílio. Aplicação encerrada. </p>"); //mostra a mensagem de erro e encerra a aplicação
   }

  //recebendo o value o botão de rádio selecionado
  $modalidadePagamento = $_POST['modalidade-pagamento'];

  $desconto = 0;
  if($modalidadePagamento == "sim")
   {
   $desconto = $valorCompra * TAXA_DESCONTO;
   }

  $entregaDomicilio = $_POST["entrega-domicilio"];

  $acrescimo = 0;
  if($entregaDomicilio == "sim")
   {
   $acrescimo = $valorCompra * TAXA_ACRESCIMO;
   }

  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;

  $valorCompraFormatado = number_format($valorCompra, 2, ",", ".");
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
  $acrescimoFormatado = number_format($acrescimo, 2, ",", ".");
  $descontoFormatado = number_format($desconto, 2, ",", ".");

  echo "<p> Dados da compra do cliente - supermercados AAA: <br>
        Valor inicial da compra = <span> R$$valorCompraFormatado </span> <br>
        Valor do acréscimo = <span> R$$acrescimoFormatado </span> <br>
        Valor do desconto = <span> R$$descontoFormatado </span> <br>
        Valor final da compra = <span> R$$valorFinalCompraFormatado </span> </p>";  
 ?> 
</body> 
</html> 