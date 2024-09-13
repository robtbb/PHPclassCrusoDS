<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc1.css">
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL4 - exercício 1 - resposta do servidor </h1>
 <?php

  //criar o vetor de índice numérico para armazenar as 3 notas
  $vetorNotas[0] = $_POST['nota1'];
  $vetorNotas[1] = $_POST['nota2'];
  $vetorNotas[2] = $_POST['nota3'];

  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";

  //calcular a média de notas no vetor
  echo "<p>";
  foreach($vetorNotas as $notaDoAluno)
   {
   echo "Nota do aluno = $notaDoAluno <br>";
   }
  echo "</p>";

  $soma = array_sum($vetorNotas);
  $media = $soma/count($vetorNotas);
  $mediaFormatada = number_format($media, 1, ",", ".");
  echo "<p> Média das notas no vetor = <span> $mediaFormatada </span> </p>";
 ?> 
</body> 
</html> 