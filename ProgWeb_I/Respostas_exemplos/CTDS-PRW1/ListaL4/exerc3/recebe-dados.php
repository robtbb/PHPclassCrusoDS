<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc3.css">
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL4 - exercício 3 - resposta do servidor </h1>
 <?php
 
  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $nota3 = $_POST["nota3"];

  $vetorAlunos = [$aluno1 => $nota1, 
                  $aluno2 => $nota2, 
                  $aluno3 => $nota3];

  //aqui, devemos ordenar o vetor, mantendo a associação entre nota e nome de aluno (a); da maior para a menor nota (r); pelo conteúdo do vetor (sem a letra k, de key)

  arsort($vetorAlunos);

  echo "<table>
         <caption> CTDS - PRWI - rendimento semestral do aluno - dados ordenados decrescentemente pela nota </caption>
         <tr>
           <th> Nome do aluno </th>
           <th> Nota de PRWI </th>
         </tr>";

  foreach($vetorAlunos as $aluno => $nota)
   {
   echo "<tr>
          <td> $aluno </td>
          <td> $nota </td>
         </tr>";
   }
   echo "</table>";   
 ?> 
</body> 
</html> 