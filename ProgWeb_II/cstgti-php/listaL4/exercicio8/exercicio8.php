<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP eu so de includes </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Funções de usuário e includes em PHP - listaL4 - exercício 8 </h1>

 <form action="exercicio8.php" method="post">
  <fieldset>
   <legend> Processando dados de um aluno </legend>

   <label class="alinha"> Forneça a nota1: </label>
   <input type="number" name="nota1" step="0.1" autofocus min="0" max="10"> <br>
   
   <label class="alinha"> Forneça a nota2: </label>
   <input type="number" name="nota2" step="0.1" min="0" max="10"> <br> 

   <label class="alinha"> Forneça a nota3: </label>
   <input type="number" name="nota3" step="0.1" min="0" max="10"> <br> <br>

   <label> Escolha o tipo de média a ser calculada: </label> <br>

   <input type="radio" name="tipo-media" value="media aritmética simples" id="opcao1"> <label for="opcao1"> Média aritmética simples </label> <br>

   <input type="radio" name="tipo-media" value="media aritmética ponderada" id="opcao2"> <label for="opcao2"> Média aritmética ponderada </label> <br>

   <button name="enviar-dados"> Calcular média </button>
  </fieldset>
 </form>
 
 <?php
  require_once "exercicio8.inc.php";  
  
  $clicouSubmit = isset($_POST["enviar-dados"]);

  If($clicouSubmit)
   {
   //receber os dados do formulário
   $nota1 = $_POST["nota1"];
   $nota2 = $_POST["nota2"];
   $nota3 = $_POST["nota3"];

   //recebendo o tipo de média escolhido no formulário
   $tipoMedia = $_POST['tipo-media'];

   if($tipoMedia == "media aritmética simples")
    {
    $mediaCalculada = calcularMediaAritmetica($nota1, $nota2, $nota3);
    }
   else 
    {
    $mediaCalculada = calcularMediaPonderada($nota1, $nota2, $nota3);
    }
  
   //escrevendo a média calculada e as três notas do aluno
   echo "<p> Resultado do cálculo da média do aluno: <br>
        Nota 1 = <span> $nota1 </span> <br>
        Nota 2 = <span> $nota2 </span> <br>
        Nota 3 = <span> $nota3 </span> <br>
        Média final = <span> $mediaCalculada </span> </p>";
   }    
 ?>
</body> 
</html> 