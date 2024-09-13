<?php
 $sql = "SELECT SUM(preco * estoque) FROM $nomeDaTabela WHERE classificacao = 'não perecível'";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $vetorRegistro = $resultado->fetch_array();
 $faturamento   = $vetorRegistro[0];
 $faturamentoFormatado = number_format($faturamento, 2, ",", ".");

 echo "<p> O faturamento que o cliente obterá com a venda de todos os produtos não-perecíveis em estoque será igual a <span> R$$faturamentoFormatado </span> </p>";