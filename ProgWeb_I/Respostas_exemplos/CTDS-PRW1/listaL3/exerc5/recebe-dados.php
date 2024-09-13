<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc5.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 5 - resposta do servidor </h1>
 <?php
  define('TAXA_CAMBIO', 5.48);
  $quantosDolares = $_POST['quantos-dolares'];

  $quantosReais   = $quantosDolares * TAXA_CAMBIO;

  $quantosDolaresFormatado = number_format($quantosDolares, 2, ",", ".");
  $quantosReaisFormatado   = number_format($quantosReais, 2, ",", ".");

  echo "<p> Resultado da conversão monetária: <br>
            Valor fornecido, em dólares: <span> $$quantosDolaresFormatado </span> <br>
            Valor convertido em reais: <span> R$$quantosReaisFormatado </span> <br>
            Valor da taxa de câmbio: hoje, 13/08/2024, um dólar equivale a <span>", TAXA_CAMBIO, "</span> reais. </p>"; 
 ?> 
 
 <form action="exerc5.html" method="post">
  <button> Retornar ao formulário </button>
 </form>
</body> 
</html> 