<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Vetores em PHP - exercício 3 - listaL2 </h1>
 <?php
  //recebendo os dados do navegador
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  //criando o vetor para armazenar as três notas E OS NOMES DOS TRÊS ALUNOS
  $vetorNotas = [$aluno1 => $nota1,
                 $aluno2 => $nota2,
                 $aluno3 => $nota3];

  //ordenando o vetor de notas em ordem decrescente de notas       
  arsort($vetorNotas);       

  //usando o laço foreach para percorrermos um vetor em PHP

  echo "<table>
         <caption> Relação de dados de alunos e suas respectivas notas em PRWII </caption>
         <tr>
          <th> Nome do aluno </th>
          <th> Nota do aluno em PRWII </th>
         </tr>";

  foreach($vetorNotas as $nomeDoAluno => $notaAluno)
   {
   echo "<tr>
          <td> $nomeDoAluno </td>
          <td> $notaAluno </td>
         </tr>";
   }
  echo "</table>";

  //descobrindo a maior nota do aluno
  $maiorNota = max($vetorNotas);

  //descobrindo o nome do aluno com a maior nota
  $nomeDoAlunoComMaiorNota = array_search($maiorNota, $vetorNotas);

  echo "<p> Nome do aluno com maior nota = <span> $nomeDoAlunoComMaiorNota </span> <br>
            Maior nota = <span> $maiorNota </span> </p>";
 ?>
 
</body> 
</html> 