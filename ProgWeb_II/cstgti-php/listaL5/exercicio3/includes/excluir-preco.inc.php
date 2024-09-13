<?php
 $quantidadeEstoque = trim($conexao->escape_string($_POST['exclui-produto']));

 $sql = "DELETE FROM $nomeDaTabela WHERE estoque < $quantidadeEstoque";

 $conexao->query($sql) or die($conexao->error);

 $quantos = $conexao->affected_rows;

 echo "<p> Número de produtos com quantidade em estoque abaixo de <span> $quantidadeEstoque unidades </span> e que foram excluídos do banco de dados = <span> $quantos </span> produtos. </p>";

