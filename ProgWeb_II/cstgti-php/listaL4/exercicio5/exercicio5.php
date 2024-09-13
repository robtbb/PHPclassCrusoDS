<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código e uso de includes em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Funções de usuário e includes em PHP - listaL4 - exercício 5 </h1>

 <form action="exercicio5.php" method="post">
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
  //vamos fazer com que o PHP busque o corpo e o cabeçalho das duas funções que estão na include externa e use estas duas funções para executar as operações descritas nas linhas 35 e 38 do nosso código
  include "exercicio5.inc.php";

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