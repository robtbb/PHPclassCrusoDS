<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - exercício 3 - listaL1 - resposta do servidor </h1>
 <?php
  //criando constantes na linguagem PHP
  define("TAXA_DESCONTO", 10/100);
  define("ICMS", 12/100);
  define("TAXA_COMISSAO", 5/100);

  $valorVenda = $_GET['valor-compra'];

  $desconto = $valorVenda * TAXA_DESCONTO;
  $icms     = $valorVenda * ICMS;
  $comissao = $valorVenda * TAXA_COMISSAO;

  
  echo "<p> Processamento dos dados da venda: <br>
            Desconto do cliente = <span> R$$desconto </span> <br>
            ICMS = <span> R$$icms </span> <br>
            Comissão do vendedor = <span> R$$comissao </span> <br>
            Valor da constante da taxa de desconto = <span> ", TAXA_DESCONTO, "</span> </p>";
 ?>
 
</body> 
</html> 