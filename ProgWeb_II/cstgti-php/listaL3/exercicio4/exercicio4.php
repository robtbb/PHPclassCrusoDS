<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Arrays bidimensionais com PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Matrizes em PHP - exercício 4 - listaL3 </h1>

 <form action="exercicio4.php" method="post">
  <!--aluno1-->
  <fieldset>
   <legend> Aluno1 - dados cadastrais </legend>
   <label class="alinha"> Nome do aluno: </label>
   <input type="text" name="aluno1"> <br>

   <label class="alinha"> Matrícula do aluno: </label>
   <input type="text" name="matric1"> <br>

   <label class="alinha"> Nota de PRWII: </label>
   <input type="number" name="nota1" max="10" min="0" step=".1">
  </fieldset>

  <!--aluno2-->
  <fieldset>
      <legend> Aluno2 - dados cadastrais </legend>
      <label class="alinha"> Nome do aluno: </label>
      <input type="text" name="aluno2"> <br>
   
      <label class="alinha"> Matrícula do aluno: </label>
      <input type="text" name="matric2"> <br>
   
      <label class="alinha"> Nota de PRWII: </label>
      <input type="number" name="nota2" max="10" min="0" step=".1">
  </fieldset>

  <!--aluno3-->
  <fieldset>
    <legend> Aluno3 - dados cadastrais </legend>
    <label class="alinha"> Nome do aluno: </label>
    <input type="text" name="aluno3"> <br>
 
    <label class="alinha"> Matrícula do aluno: </label>
    <input type="text" name="matric3"> <br>
 
    <label class="alinha"> Nota de PRWII: </label>
    <input type="number" name="nota3" max="10" min="0" step=".1">
  </fieldset>

  <fieldset>
    <legend> Módulo de pesquisa do aluno </legend>
    <label class="alinha"> Aluno pesquisado: </label>
    <input type="text" name="pesquisa-aluno"> 
  </fieldset>
 </form>
   
 <button name="enviar-dados"> Calcular média </button>
  </fieldset>
 </form>
 
 <?php
  //observe que estamos com processamento de código em PHP no mesmo arquivo com os elementos de um formulário. Para que o PHP não gere mensagens de erro por ainda não ter recebido nenhum dado do navegador, usamos a estrutura abaixo

  $clicouSubmit = isset($_POST["enviar-dados"]);

  If($clicouSubmit)
   {   
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

    //rebendo o nome do aluno a ser pesquisado
    $alunoPesquisado = $_POST['pesquisa-aluno'];

  foreach($matrizAlunos as $matric => $vetorInterno)
    {
    $vetorTemporario[$matric] = $vetorInterno[0];
    }


  //vamos pesquisar o nome do aluno dentro do vetor
  $matriculaEncontrada = array_search($alunoPesquisado, $vetorTemporario);

  if($matriculaEncontrada)
   {
   //encontrou o aluno pesquisado
   $notaAlunoPesquisado = $matrizAlunos[$matriculaEncontrada][1];

   echo "<p> Dados do aluno pesquisado: <br>
         Nome = <span> $alunoPesquisado </span> <br>
         Matrícula = <span> $matriculaEncontrada </span> <br>
         Nota de PRWII = <span> $notaAlunoPesquisado </span> </p>";
   }
  else
   {
   echo "<p> O aluno pesquisado na matriz, de nome <span> $alunoPesquisado </span> não foi encontrado. </p>";
   }

  }
 ?>
</body> 
</html> 