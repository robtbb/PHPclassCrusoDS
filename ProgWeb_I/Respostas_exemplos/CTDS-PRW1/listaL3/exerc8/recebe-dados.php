<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc8.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 8 - resposta do servidor </h1>
 <?php
  $valorCompra = $_POST['valor-compra'];

  $desconto = 0;
  if(isset($_POST["forma-pagamento"]))
   {
   $desconto = $valorCompra * 5/100;
   }

  $acrescimo = 0;
  if(isset($_POST['forma-entrega']))
   {
   $acrescimo = $valorCompra * 2/100;
   }

  $valorFinalCompra = $valorCompra + $acrescimo - $desconto;
  
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
  $descontoFormatado  = number_format($desconto, 2, ",", ".");
  $acrescimoFormatado = number_format($acrescimo, 2, ",", ".");
  
  echo "<p> Caro usuário, informamos que o valor final da compra do cliente, considerando descontos e acréscimos, é igual a <span> R$$valorFinalCompraFormatado </span> <br>
  Valor do acréscimo: <span> R$$acrescimoFormatado </span> <br>
  Valor do desconto: <span> R$$descontoFormatado </span> </p>";
 ?> 
 
 <form action="exerc7.html" method="post">
  <button> Retornar ao formulário </button>
 </form>
</body> 
</html> 