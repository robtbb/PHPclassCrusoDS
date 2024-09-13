<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Vetores em PHP - exercício 1 - listaL2 </h1>
 <?php
  //recebendo os dados do navegador
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  //criando o vetor para armazenar as três notas
  $vetorNotas[0] = $nota1;
  $vetorNotas[1] = $nota2;
  $vetorNotas[2] = $nota3;

  //visualizar a estrutura de um vetor na página web
  echo "<pre>";
  print_r($vetorNotas);
  echo "</pre>";

  //calculando a média das notas no vetor

  $media = array_sum($vetorNotas) / count($vetorNotas);
  $mediaFormatada = number_format($media, 1, ",", ".");

  echo "<p> A média de notas de PRWII dos três alunos cadastrados é igual a <span> $mediaFormatada </span> </p>";
 ?>
 
</body> 
</html> 