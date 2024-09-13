<?php
 function validarFormulario($nome, $idade)
  {
  //vamos usar a função do PHP que remove espaços em branco
  $nome = trim($nome);
  $nomeVazio = empty($nome); //esta função verifica o conteúdo da variável. Se houver qualquer caracter válido, ela retorna false. Se a variável contiver nulo ou a string vazia (""), esta variável retorna true

  if($nomeVazio)
   {
   //variável nome está vazia. Dado inválido
   exit("<p> A caixa com o nome da pessoa deve ser preenchida. Aplicação encerrada. </p>");
   }

  //testando a caixa com números inteiros
  $valorTestado = filter_var($idade, FILTER_VALIDATE_INT);  //na validação de inteiros, esta função retorna FALSE se o valor fornecido não for um inteiro; caso contrário, a função retorna o próprio número e guarda este na variável de retorno

  if($valorTestado == false OR $valorTestado <= 0)
   {
   exit("<p> O valor da idade fornecido não está correto. Aplicação encerrada. </p>"); 
   }
  }

 //===============================================

 function testarAptoVotar($idade)
  {
  if($idade >= 16)
   {
   echo "<p> Caro usuário, sua idade é de <span> $idade </span> anos. Portanto, <span> você está apto a votar nesta eleição. </span> </p>";
   }
  else
   {
    echo "<p> Caro usuário, sua idade é de <span> $idade </span> anos. Portanto, <span> você NÃO está apto a votar nesta eleição. </span> </p>";
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
 <h1> Funções de usuário em PHP - listaL4 - exercício 2 </h1>

 <form action="exercicio2.php" method="post">
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