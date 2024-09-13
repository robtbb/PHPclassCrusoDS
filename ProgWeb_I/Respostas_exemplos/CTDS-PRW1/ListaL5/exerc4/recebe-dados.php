<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc4.css">
</head> 

<body> 
 <h1> Tratamento de matrizes em PHP - listaL5 - exercício 4 - resposta do servidor </h1>
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
              
  //recebendo o dado do aluno a ser pesquisado
  $alunoPesquisado = $_POST['pesquisa-aluno'];

  //para faciliar o trabalho de descobrir se o aluno pesquisado está na matriz, criaremos um vetor auxiliar, contendo o nome do aluno e a matrícula como índice. Em seguida, usamos a função in_array() sobre este vetor.

  foreach($matrizAlunos as $matric => $vetorInterno)
   {
   $vetorAux[$matric] = $vetorInterno[0];
   }

  //usando a função in_array sobre o vetor auxiliar
  $encontrou = in_array($alunoPesquisado, $vetorAux);

  if($encontrou)
   {
   //buscamos a matrícula do aluno pesquisado no vetor auxiliar
   $matricAlunoPesquisado = array_search($alunoPesquisado, $vetorAux);
   $mediaAlunoPesquisado = $matrizAlunos[$matricAlunoPesquisado][1];
   echo "<p> Dados do aluno pesquisado: <br>
             Aluno pesquisado = <span> $alunoPesquisado </span> <br>
             Matrícula do aluno pesquisado = <span> $matricAlunoPesquisado </span> <br>
             Média do aluno pesquisado = <span> $mediaAlunoPesquisado </span> </p>";
   }
  else
   {
   echo "<p> Caro usuário, o aluno de nome <span> $alunoPesquisado </span> NÃO foi encontrado na matriz. </p>"; 
   }
   
  echo "<form action='exerc4.html' method='post'>
          <button> Retornar ao início </button>
        </form>";
 ?> 
</body> 
</html> 