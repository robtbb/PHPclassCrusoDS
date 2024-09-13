<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> matrizes em PHP - exercício 1 - listaL3 </h1>
 <?php
  include "exercicio9.inc.php";

  //recebendo os dados do navegador
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  //vamos invocar a função que valida as três notas do aluno
  testarNotas($nota1, $nota2, $nota3);

  //criando a matriz onde a matrícula do aluno será o índice do vetor externo
  $matrizAlunos = [$matric1 => [$aluno1, $nota1],
                   $matric2 => [$aluno2, $nota2],
                   $matric3 => [$aluno3, $nota3]];
 
 //invocar a função que percorre a matriz e tabula os dados na página web
 mostrarDados($matrizAlunos);  
 ?>
 
</body> 
</html> 