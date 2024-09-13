<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - exercício 9 - listaL1 - resposta do servidor </h1>
 <?php
  define("TAXA_DESCONTO", 5/100);
  define("TAXA_ACRESCIMO", 2/100);

  $valorCompra = $_POST['valor-compra'];
  

  //fazendo o PHP testar se um botão de rádio (de um conjunto de botões) foi, ou não foi, marcado
  $escolheuModalidadePagamento = isset($_POST['modalidade-pagamento']);
  $pagouCartaoVisa = isset($_POST['pagamento-cartao']);

  //testar um qualquer um dos botões de rádio foi marcado
  if(!$escolheuModalidadePagamento)
   {
   exit("<p> Você deve fornecer as informações relacionadas à modalidade de pagamento. Aplicação encerrada. </p>"); //mostra a mensagem de erro e encerra a aplicação
   }

  //recebendo o value o botão de rádio selecionado
  $modalidadePagamento = $_POST['modalidade-pagamento'];

  $desconto = 0;
  $acrescimo = 0;

  if($modalidadePagamento == "à vista")
   {
   $desconto = $valorCompra * TAXA_DESCONTO;
   }
  else 
   {
   $acrescimo = $valorCompra * TAXA_ACRESCIMO;
   }

  //testando se o pagamento foi feito com Visa

  if($pagouCartaoVisa)
   {
   $sorteio = "O cliente pagou com a bandeira Visa. Portanto, está apto ao sorteio mensal.";
   }
  else
   {
   $sorteio = "O cliente NÃO pagou com a bandeira Visa. Portanto, NÃO está apto ao sorteio mensal."; 
   }

  //calculando o valor final da compra
  $valorFinalCompra = $valorCompra + $acrescimo - $desconto;
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

  echo "<p> Resultado do processamento da venda: <br>
            Valor final da compra = <span> R$$valorFinalCompraFormatado </span> <br>
            <span> $sorteio </span> </p>";
 ?> 
</body> 
</html> 