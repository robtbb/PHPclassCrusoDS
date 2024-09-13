<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc5.css">
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP - listaL5 - exercício 5 - resposta do servidor </h1>
 <?php
  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];

  $media1  = $_POST['media1'];
  $media2  = $_POST['media2'];
  $media3  = $_POST['media3'];

  $matrizAlunos[$matric1][0] = $aluno1;
  $matrizAlunos[$matric1][1] = $media1;
  $matrizAlunos[$matric2][0] = $aluno2;
  $matrizAlunos[$matric2][1] = $media2;
  $matrizAlunos[$matric3][0] = $aluno3;
  $matrizAlunos[$matric3][1] = $media3;

  //percorrer a matriz e criar um vetor auxiliar, armazenando a média de cada aluno. A matrícula do aluno é o índice deste vetor
  foreach($matrizAlunos as $matricula => $vetorInterno)
   {
   $vetorAuxiliar[$matricula] = $vetorInterno[1];
   }

  //vamos ordenar o vetor auxiliar por meio da função arsort()
  arsort($vetorAuxiliar); 
  
  echo "<table>
         <caption> CTDS - PRWI - rendimento semestral do aluno - dados ordenados pela média, decrescentemente </caption>
         <tr>
           <th> Matrícula do aluno </th>
           <th> Nome do aluno </th>
           <th> Média de PRWI </th>
         </tr>";

  //percorrer o vetor ordenado para montar a tabela na página web, por meio do laço foreach()
  foreach($vetorAuxiliar as $matric => $media)
   {
   echo "<tr>
          <td> $matric </td>
          <td> {$matrizAlunos[$matric][0]} </td>
          <td> $media </td>
         </tr>";
   }

  echo "</table>";
  echo "<form action='exerc5.html' method='post'>
          <button> Retornar ao início </button>
        </form>";
 ?> 
</body> 
</html> 