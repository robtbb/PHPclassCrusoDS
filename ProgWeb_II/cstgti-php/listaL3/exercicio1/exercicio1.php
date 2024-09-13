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

  //criando a matriz onde a matrícula do aluno será o índice do vetor externo
  $matrizAlunos = [$matric1 => [$aluno1, $nota1],
                   $matric2 => [$aluno2, $nota2],
                   $matric3 => [$aluno3, $nota3]];
 
  /*echo "<pre>";
  print_r($matrizAlunos);
  echo "</pre>";*/


  //usando o laço foreach para percorrermos um vetor em PHP

  echo "<table>
         <caption> Relação de dados de alunos e suas respectivas notas em PRWII </caption>
         <tr>
          <th> Matrícula do aluno </th>
          <th> Nome do aluno </th>
          <th> Nota do aluno em PRWII </th>
         </tr>";

  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $aluno = $vetorInterno[0];
   $nota  = $vetorInterno[1];
   echo "<tr>
          <td> $matric </td>
          <td> $aluno </td>
          <td> $nota </td>
         </tr>";
   }
  echo "</table>";  
 ?>
 
</body> 
</html> 