<?php
 //este módulo faz o PHP disparar uma consulta select ao banco de dados, para que o mesmo retorne ao nosso código todos os registros dos alunos cadastrados

 $sql = "SELECT * FROM $nomeDaTabela";
 $resultado = $conexao->query($sql) or die($conexao->error);

 //vamos pedir para o PHP testar se retornou algum registro da consulta SELECT anterior
 $quantosRegistros = $conexao->affected_rows;

 if($quantosRegistros === 0)
  {
  echo "<p> Impossível tabular dados dos alunos. A tabela, no banco de dados, está vazia. </p>";
  }
 else
  {
  //criando o cabeçalho da tabela na página web
  echo "<table>
         <caption> Relação de alunos cadastrados no banco de dados </caption>
         <tr>
          <th> Matrícula </th>
          <th> Aluno </th>
          <th> Média em PRWII </th>
         </tr>";

  //após a criação do cabeçalho, o PHP deve percorrer o conteúdo do objeto $resultado, retirando cada linha deste objeto e inserindo os dados de da cada linha no corpo da tabela na página web
  While($registro = $resultado->fetch_array())   
   {
   $matricula = htmlentities($registro[0], ENT_QUOTES, "utf-8");

   $aluno = htmlentities($registro[1], ENT_QUOTES, "utf-8");

   $media = htmlentities($registro[2], ENT_QUOTES, "utf-8");

   echo "<tr>
          <td> $matricula </td>
          <td> $aluno </td>
          <td> $media </td>
         </tr>";
   }
  echo "</table>";
  }