<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - exercício 2 - listaL1 - resposta do servidor </h1>
 <?php
  $distancia = $_POST["distancia"];
  $autonomia = $_POST['autonomia'];
  $preco     = $_POST['preco'];

  //calculando a quantidade de litros gastos na viagem
  $quantosLitros = $distancia / $autonomia;

  //calculando o valor gasto na viagem
  $quantosReais  = $preco * $quantosLitros;

  //fazendo formatação numérica com PHP
  $quantosLitrosFormatado = number_format($quantosLitros, 0, ',', ".");

  $quantosReaisFormatado = number_format($quantosReais, 2, ",", ".");

  $precoFormatado = number_format($preco, 2, ",", ".");

  echo "<p> Viagem da Maria - resumo do processamento em PHP: <br>

  Preço do litro de gasolina = <span> R$$precoFormatado </span> <br>
  Quantos litros gastos = <span> $quantosLitrosFormatado litros </span> <br>
  Despesa da viagem = <span> R$$quantosReaisFormatado </span> </p>";
?>
 
</body> 
</html> 