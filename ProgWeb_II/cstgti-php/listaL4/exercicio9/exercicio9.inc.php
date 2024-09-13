<?php
 function testarNotas($n1, $n2, $n3)
  {
  $n1 = filter_var($n1, FILTER_VALIDATE_FLOAT);
  $n2 = filter_var($n2, FILTER_VALIDATE_FLOAT);
  $n3 = filter_var($n3, FILTER_VALIDATE_FLOAT);

  if($n1 === false OR $n2 === false OR $n3 === false OR $n1 < 0 OR $n2 < 0 || $n3 < 0 OR $n1 > 10 OR $n2 > 10 OR $n3 > 10)
   {
   exit("<p> Caro usuário, os dados fornecidos para as notas dos alunos estão incorretos. Aplicação encerrada. </p>");
   }
  }

 function mostrardados($matriz)
  {
  echo "<table>
           <caption> Relação de dados de alunos e suas respectivas notas em PRWII </caption>
           <tr>
            <th> Matrícula do aluno </th>
            <th> Nome do aluno </th>
            <th> Nota do aluno em PRWII </th>
           </tr>";

  foreach($matriz as $matric => $vetorInterno)
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
 }