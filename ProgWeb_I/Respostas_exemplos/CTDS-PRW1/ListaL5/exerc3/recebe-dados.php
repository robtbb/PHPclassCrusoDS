<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc3.css">
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP - listaL5 - exercício 3 - resposta do servidor </h1>
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

  $matrizAlunos = [$matric1 => [$aluno1, $media1],
                   $matric2 => [$aluno2, $media2],
                   $matric3 => [$aluno3, $media3]];


  //para faciliar o trabalho de descobrir todas as informações do aluno com maior nota cadastrado na matriz, criaremos um vetor auxiliar, contendo a a média do aluno e a matrícula como índice. Em seguida, usamos a função max sobre este vetor.

  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $vetorAux[$matric] = $vetorInterno[1];
   }

  //usando a função max sobre o vetor auxiliar
  $maiorMedia = max($vetorAux);

  //descobrimos a matrícula do aluno que tem a maior média usando array_search()
  $matricAlunoMaiorMedia = array_search($maiorMedia, $vetorAux);

  //finalmente, com os dados acima (matrícula do aluno), conseguimos acessar o nome do aluno-destaque da turma
  $alunoDestaque = $matrizAlunos[$matricAlunoMaiorMedia][0];

  echo "<script>
         alert('Dados do aluno-destaque: \\n Nome do aluno = $alunoDestaque \\n Matrícula = $matricAlunoMaiorMedia \\n Média = $maiorMedia');
        </script>";
 
  echo "<form action='exerc3.html' method='post'>
          <button> Retornar ao início </button>
        </form>";
 ?> 
</body> 
</html> 