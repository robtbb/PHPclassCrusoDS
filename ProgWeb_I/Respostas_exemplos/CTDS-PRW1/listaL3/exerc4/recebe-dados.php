<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc4.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 4 - resposta do servidor </h1>
 <?php
  $tempF = $_POST['tempF'];
  $tempC = ($tempF - 32) * 5/9;

  $tempFFormatada = number_format($tempF, 1, ",", ".");
  $tempCFormatada = number_format($tempC, 1, ",", ".");

  echo "<p> Resultado da conversão de escala termométrica: <br>
        Temperatura fornecida em ºF = <span> {$tempFFormatada}ºF </span> <br>
        Temperatura convertida em ºC = <span> {$tempCFormatada}ºC </span> </p>"; 
 ?> 
 
 <form action="exerc4.html" method="post">
  <button> Retornar à homepage </button>
 </form>
</body> 
</html> 