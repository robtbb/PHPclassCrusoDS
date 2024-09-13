<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP - uso de includes e funções </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Funções de usuário e includes em PHP - listaL4 - exercício 6 </h1>

 <form action="exercicio6.php" method="post">
  <fieldset>
   <legend> Dados da pessoa </legend>
   <label class="alinha"> Forneça o nome da pessoa: </label>
   <input type="text" name="nome"> <br>

   <label class="alinha"> Forneça a idade da pessoa (valor maior ou igual a zero): </label>
   <input type="number" name="idade"> <br>

   <button name="enviar-dados"> Validar dados </button>
  </fieldset>
 </form>
 
 <?php
  include "exercicio6.inc.php";
  
  $clicouSubmit = isset($_POST["enviar-dados"]);

  If($clicouSubmit)
   {   
    $nome  = $_POST['nome'];
    $idade = $_POST['idade'];
 
    //função que testa a integridade dos campos do formulário
    validarFormulario($nome, $idade);

    //invocamos a função que testa se o usuário está apto a votar
    testarAptoVotar($idade);
    }    
 ?>
</body> 
</html> 