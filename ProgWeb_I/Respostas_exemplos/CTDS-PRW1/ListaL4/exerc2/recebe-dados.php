<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc2.css">
</head> 

<body> 
 <h1> Tratamento de vetores em PHP - listaL4 - exercício 2 - resposta do servidor </h1>
 <?php
  //criando o vetor com índice associativo. O conteúdo de cada célula é dado pela nota do aluno e o índice é o nome do aluno

  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $nota1 = $_POST["nota1"];
  $nota2 = $_POST["nota2"];
  $nota3 = $_POST["nota3"];

  //primeira forma
  $vetorAlunos[$aluno1] = $nota1;
  $vetorAlunos[$aluno2] = $nota2;
  $vetorAlunos[$aluno3] = $nota3;

  //segunda forma
  $vetorAlunos = array($aluno1 => $nota1, 
                       $aluno2 => $nota2, 
                       $aluno3 => $nota3);

  //terceira forma
  $vetorAlunos = [$aluno1 => $nota1, 
                  $aluno2 => $nota2, 
                  $aluno3 => $nota3];

  echo "<pre>";
  print_r($vetorAlunos);
  echo "</pre>";

  //vamos percorrer o vetor e estruturar os dados no formato tabular
  echo "<table>
         <caption> CTDS - PRWI - rendimento semestral do aluno </caption>
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
  //não esqueça de fechar a a tabela após o encerramento do foreach
  echo "</table>"; 

  //descobrir a maior nota e o nome do aluno com a maior nota
  $maiorNota = max($vetorAlunos);
  $nomeAlunoMaiorNota = array_search($maiorNota, $vetorAlunos);

  echo "<p>Caro usuário, informamos que o aluno com a maior nota cadastrada no vetor é <span> $nomeAlunoMaiorNota, </span> com o valor <span> $maiorNota </span> </p>";
 ?> 
</body> 
</html> 