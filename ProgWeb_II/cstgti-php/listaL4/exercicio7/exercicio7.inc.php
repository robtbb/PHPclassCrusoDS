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
