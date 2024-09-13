<?php
 //área de declaração das funções
 function calcularMedia($nota1, $nota2)
  {  
  $media = ($nota1 + $nota2)/2;
  return $media;
  }

 //===============================================

 function verificarAprovacao($mediaCalculada)
  {
  if($mediaCalculada >= 6)
   {
    echo "<p> Aluno aprovado, com média final em PRWII igual a <span> $mediaCalculada </span> </p>";
   }
  else
   {
   echo "<p> Aluno não aprovado, com média final em PRWII igual a <span> $mediaCalculada </span> </p>";
   }
  }
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Funções de usuário em PHP - listaL4 - exercício 1 </h1>

 <form action="exercicio1.php" method="post">
  <fieldset>
   <legend> Rendimento do aluno </legend>
   <label class="alinha"> Nota1: </label>
   <input type="number" name="nota1" min="0" max="10" step="0.1"> <br>

   <label class="alinha"> Nota2: </label>
   <input type="number" name="nota2" min="0" max="10" step="0.1"> <br>

   <button name="enviar-dados"> Calcular média </button>
  </fieldset>
 </form>
 
 <?php
  $clicouSubmit = isset($_POST["enviar-dados"]);

  If($clicouSubmit)
   {   
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    //invocamos uma função que calcula e retorna a média aritmética simples deste aluno
    $mediaCalculada = calcularMedia($nota1, $nota2);

    //invocamos uma função que recebe a média calculada a acima e mostra ao usuário se este aluno conseguiu (ou não) a aprovação
    verificarAprovacao($mediaCalculada);
   }    
 ?>
</body> 
</html> 