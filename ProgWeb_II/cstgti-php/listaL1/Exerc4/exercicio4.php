<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - exercício 4 - listaL1 - resposta do servidor </h1>
 <?php
  $tf = $_POST['tf'];

  $tc = ($tf - 32) * 5/9;

  echo "<p> Resultado da conversão: <br>
            Temperatura em Fahrenheit = <span> {$tf}°F </span> <br>

            Temperatura convertida em Celsius = <span> {$tc}°C </span> </p>";
            //observe que, quando queremos acrescentar qualquer caracter após o nome de uma variável, sem usar espaço em branco, podemos utilizar o recurso das chaves
 ?>
 
</body> 
</html> 