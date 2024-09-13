<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc1.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 1 - resposta do servidor </h1>

 <?php
  //abaixo, você confere a forma como o PHP recebe dados de um formulário e como ele armazena este dado em variáveis. Lembrar que PHP é uma linguagem de programação fracamente tipada, isto é, dentro de uma mesma variável posso armazenar dados de diferentes tipos

  $nomeDoAluno = $_POST['nome-aluno'];
  $nota1       = $_POST["nota1"];
  $peso1       = $_POST["peso1"];
  $nota2       = $_POST['nota2'];
  $peso2       = $_POST['peso2'];

  //calculando a média ponderada do aluno
  $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);
  echo "<p> Resultado do processamento de notas do aluno: <br>
            Nome do aluno = $nomeDoAluno <br>
            Média ponderada = $media
        </p>";
 ?>    
</body> 
</html> 