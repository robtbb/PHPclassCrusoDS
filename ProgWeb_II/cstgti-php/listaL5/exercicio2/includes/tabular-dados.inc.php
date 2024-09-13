<?php
 $sql = "SELECT * FROM $nomeDaTabela WHERE classificacao = 'perecível' ORDER BY estoque DESC";
 $resultado = $conexao->query($sql) or die($conexao->error);

 $quantosRegistros = $conexao->affected_rows;

 if($quantosRegistros == 0)
  {
  echo "<p> Impossível tabular dados dos produtos. Não há produtos perecíveis cadastrados no banco de dados. </p>";
  }
 else
  {
  echo "<table>
         <caption> Relação de produtos perecíveis cadastrados no banco de dados </caption>
         <tr>
          <th> Código </th>
          <th> Preço </th>
          <th> Quantidade em estoque </th>
          <th> Classificação do produto </th>
          <th> Descrição do produto </th>
         </tr>";

  While($registro = $resultado->fetch_array())   
   {
   $codigo    = htmlentities($registro[0], ENT_QUOTES, "utf-8");
   $preco     = htmlentities($registro[1], ENT_QUOTES, "utf-8");
   $estoque   = htmlentities($registro[2], ENT_QUOTES, "utf-8");
   $classific = htmlentities($registro[3], ENT_QUOTES, "utf-8");
   $descricao = htmlentities($registro[4], ENT_QUOTES, "utf-8");

   $precoFormatado = number_format($preco, 2, ",", ".");

   echo "<tr>
          <td> $codigo </td>
          <td> $precoFormatado </td>
          <td> $estoque </td>
          <td> $classific </td>
          <td> $descricao </td>
         </tr>";
   }
  echo "</table>";
  }