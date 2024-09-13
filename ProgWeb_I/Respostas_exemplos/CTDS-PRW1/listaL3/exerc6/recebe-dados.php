<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc6.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 6 - resposta do servidor </h1>
 <?php
  $valorVenda        = $_POST['valor-compra'];
  $percentComissao   = $_POST['percentual-comissao'];

  $valorComissao = $valorVenda * ($percentComissao/100);

  $valorVendaFormatado = number_format($valorVenda, 2, ",", ".");
  $valorComissaoFormatado = number_format($valorComissao, 2, ",", ".");

  echo "<p> Resultado do processamento das vendas: <br>
            Valor da venda: <span> R$$valorVendaFormatado </span> <br>
            Valor da comissão do vendedor: <span> R$$valorComissaoFormatado </span> </p>"; 
 ?> 
 
 <form action="exerc6.html" method="post">
  <button> Retornar ao formulário </button>
 </form>
</body> 
</html> 