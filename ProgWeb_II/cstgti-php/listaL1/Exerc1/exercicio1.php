<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - exercício 1 - listaL1 </h1>
 <?php
  $nomeDoAluno = $_POST["nome-aluno"];
  echo "<p> O nome do aluno fornecido é: <span> $nomeDoAluno </span> </p>";
 ?>
 
</body> 
</html> 