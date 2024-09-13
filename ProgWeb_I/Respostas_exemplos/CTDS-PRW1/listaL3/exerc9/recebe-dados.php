<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc9.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 9 - resposta do servidor </h1>
 <?php
  define("DESCONTO", 5/100);
  define("ACRESCIMO", 2/100);

  $valorCompra = $_POST['valor-compra'];

  if(isset($_POST['forma-pagamento']))
   {
   $formaPagamento = $_POST['forma-pagamento'];

   $desconto  = 0;
   $acrescimo = 0;

   if($formaPagamento == "À vista")
    {
    $desconto = $valorCompra * DESCONTO;
    }
   else
    {
    $acrescimo = $valorCompra * ACRESCIMO;
    }
   }
  else
   {
   exit("<p> ERRO: a forma de entrega pagamento não foi fornecida. Aplicação encerrada! </p> <br>
    <form action='exerc9.html' method='post'>
      <button> Retornar ao formulário </button>
     </form>");
   }

  $sorteio = "O cliente não efetuou o pagamento com cartão da bandeira Visa e, portanto, NÃO está apto a participar do sorteio mensal do automóvel.";
  if(isset($_POST['pagamento-cartao']))
   {
   $sorteio = "O cliente efetuou o pagamento com cartão da bandeira Visa e, portanto, ESTÁ está apto a participar do sorteio mensal do automóvel.";
   }

  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");
  
  echo "<p> Caro usuário, informamos que o valor final da compra do cliente, considerando descontos e acréscimos, é igual a <span> R$$valorFinalCompraFormatado </span> <br>
  Valor do acréscimo: <span> R$$acrescimo </span> <br>
  Valor do desconto: <span> R$$desconto </span>  <br>
  <span> $sorteio </span> </p>";
 ?> 
 
 <form action="exerc9.html" method="post">
  <button> Retornar ao formulário </button>
 </form>
</body> 
</html> 