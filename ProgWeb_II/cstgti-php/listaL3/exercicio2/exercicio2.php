<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Matrizes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> matrizes em PHP - exercício 2 - listaL3 </h1>
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

  //para calcularmos a média de notas dos três alunos cadastrados, vamos percorrer a matriz com o laço foreach. A partir disso, vamos criar um vetor temporário armazenando, apenas, o valor de cada nota. Em seguida, podemos usar a função array_sum() sobre este vetor e, finalmente, podemos calcular a média da turma

  foreach($matrizAlunos as $vetorInterno)
   {
   $vetorTemporario[] = $vetorInterno[1]; //note que iniciamos um vetor vazio com colchetes sem nenhum índice. Ao fazermos isto, o PHP cria um vetor de índice numérico, começando com zero, e incrementa este índice, automaticamente, a cada repetição do laço foreach
   }

  $media = array_sum($vetorTemporario) / count($vetorTemporario);

  $mediaFormatada = number_format($media, 1, ",", ".");

  echo "<p> De acordo com o cadastro de dados, a média final da turma é igual a <span> $mediaFormatada </span> </p>";
 ?>
 
</body> 
</html> 