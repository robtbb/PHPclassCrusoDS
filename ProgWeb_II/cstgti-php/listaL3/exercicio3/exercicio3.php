<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> matrizes em PHP - exercício 3 - listaL3 </h1>
 <?php
  $nota1 = $_POST['nota1'];
  $nota2 = $_POST['nota2'];
  $nota3 = $_POST['nota3'];

  $aluno1 = $_POST['aluno1'];
  $aluno2 = $_POST['aluno2'];
  $aluno3 = $_POST['aluno3'];

  $matric1 = $_POST["matric1"];
  $matric2 = $_POST["matric2"];
  $matric3 = $_POST["matric3"];


  $matrizAlunos = [$matric1 => [$aluno1, $nota1],
                   $matric2 => [$aluno2, $nota2],
                   $matric3 => [$aluno3, $nota3]];

  //para descobrirmos o valor da maior nota e os demais dados do aluno cadastrado na matriz, vamos percorrer a matriz com o laço foreach, e vamos criar um vetor temporário com índice associativo. Este vetor armazenará a nota de cada aluno e, como índice, o seu número de matrícula. Após o término do laço, podemos usar a função max(), em conjunto com array_search() para descobrirmos os dados solicitados no enunciado

  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $vetorTemporario[$matric] = $vetorInterno[1];
   }

  //descobrimos a maior nota
  $maiorNota = max($vetorTemporario);

  //descobrimos a matrícula do aluno com a maior nota
  $matricMaiorNota = array_search($maiorNota, $vetorTemporario);

  //vamos na matriz e econtramos o nome do aluno com a maior nota
  $alunoComMaiorNota = $matrizAlunos[$matricMaiorNota][0];

  echo "<p> Dados do aluno com a maior nota: <br>
            Matrícula = <span> $matricMaiorNota </span> <br> 
            Aluno = <span> $alunoComMaiorNota </span> <br>
            Valor da nota = <span> $maiorNota </span> </p>";

 ?>
 
</body> 
</html> 