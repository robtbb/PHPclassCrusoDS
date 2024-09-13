<?php
 function testarCampos()
  {
  $temp = $_POST['temperatura'];
  $temp = filter_var($temp, FILTER_VALIDATE_FLOAT);

  if($temp === false)
   {
   exit("<p> O valor fornecido para a temperatura é inválido. Aplicação encerrada! </p>");
   }

  
  if(!isset($_POST['escala'])) 
   {
   exit("<p> Você deve escolher uma escala termométrica para a conversão. Aplicação encerrada! </p>");
   }
  }
 //================================================

 function converterParaFahrenheit($temp)
  {
  $tempF = ($temp * 9/5) + 32;
  echo "<p> Resultado da conversão termométrica: <br>
        Temperatura em °C = <span> {$temp}ºC </span> <br>
        Temperatura convertida para °F = <span> {$tempF}ºF </span> </p>";  
  }
  
 //================================================

 function converterParaCelsius($temp)
  {
  $tempC = ($temp - 32) * 5/9;
  echo "<p> Resultado da conversão termométrica: <br>
        Temperatura em °F = <span> {$temp}ºF </span> <br>
        Temperatura convertida para °C = <span> {$tempC}ºC </span> </p>";  
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
 <h1> Funções de usuário em PHP - listaL4 - exercício 3 </h1>

 <form action="exercicio3.php" method="post">
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