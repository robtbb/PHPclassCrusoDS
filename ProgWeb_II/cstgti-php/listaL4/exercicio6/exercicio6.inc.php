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
