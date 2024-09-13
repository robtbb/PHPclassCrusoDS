<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP eu so de includes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Funções de usuário e includes em PHP - listaL4 - exercício 7 </h1>

 <form action="exercicio7.php" method="post">
  <fieldset>
   <legend> Conversão de escalas termométricas </legend>
   <label class="alinha"> Forneça um valor real qualquer: </label>
   <input type="number" name="temperatura" step="0.1" autofocus> <br> <br>

   <label> Escolha a escala de conversão: </label> <br>

   <input type="radio" name="escala" value="deCparaF"> <label> Converter o valor da escala Celsius para a escala Fahrenheit </label> <br>

   <input type="radio" name="escala" value="deFparaC"> <label> Converter o valor da escala Fahrenheit para a escala Celsius </label> <br>   

   <button name="enviar-dados"> Converter temperatura </button>
  </fieldset>
 </form>
 
 <?php
  //outras formas de inclusão de um arquivo externo permitidas pelo PHP
  /*include "exercicio7.inc.php";
  require "exercicio7.inc.php";
  include_once "exercicio7.inc.php";*/
  require_once "exercicio7.inc.php";  
  
  $clicouSubmit = isset($_POST["enviar-dados"]);

  If($clicouSubmit)
   {   
   //função para testar os campos do formulário
   testarCampos();

   $temp = $_POST['temperatura'];
   $qualEscala = $_POST['escala'];

   //descobrir qual escala de conversão será usada
   if($qualEscala == "deCParaF")
    {
    converterParaFahrenheit($temp);
    }
   else
    {
    converterParaCelsius($temp);
    }    
   }    
 ?>
</body> 
</html> 