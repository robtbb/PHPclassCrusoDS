<?php
 //área de declaração das funções, dentro de uma include
 function calcularMedia($nota1, $nota2)
  {  
  $media = ($nota1 + $nota2)/2;
  return $media;
  }

 //===============================================

 function verificarAprovacao($mediaCalculada)
  {
  if($mediaCalculada >= 6)
   {
    echo "<p> Aluno aprovado, com média final em PRWII igual a <span> $mediaCalculada </span> </p>";
   }
  else
   {
   echo "<p> Aluno não aprovado, com média final em PRWII igual a <span> $mediaCalculada </span> </p>";
   }
  }