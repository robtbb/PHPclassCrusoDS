<?php
 $codigo    = $_POST["codigo"];
 $preco     = $_POST["preco"];
 $estoque   = $_POST["estoque"];

 $codigo    = $conexao->escape_string($codigo);
 $preco     = $conexao->escape_string($preco);
 $estoque   = $conexao->escape_string($estoque);

 $codigo    = trim($codigo);
 $preco     = trim($preco);
 $estoque   = trim($estoque);

 $sql = "INSERT $nomeDaTabela VALUES(
              '$codigo',
              $preco,
              $estoque)";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do produto cadastrados com sucesso no banco de dados. </p>";