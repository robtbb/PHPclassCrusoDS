<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc2.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 2 - resposta do servidor </h1>

 <?php
  $distancia   = $_POST['distancia'];
  $consumo     = $_POST["consumo"];
  $preco       = $_POST["preco"];

  $quantosLitros = $distancia / $consumo;
  $despesa       = $quantosLitros * $preco;

  echo "<p> Resultado do processamento da viagem da Maria: <br>
            Litros de combustível gastos na viagem = <span> $quantosLitros </span> <br>
            Gasto em dinheiro = <span> R$$despesa </span>
        </p>";
 ?>    
</body> 
</html> 