<?php
 $codigo    = $_POST["codigo"];
 $preco     = $_POST["preco"];
 $estoque   = $_POST["estoque"];
 $classific = $_POST["classific"];
 $descricao = $_POST["descricao"];
 

 $codigo    = $conexao->escape_string($codigo);
 $preco     = $conexao->escape_string($preco);
 $estoque   = $conexao->escape_string($estoque);
 $classific = $conexao->escape_string($classific);
 $descricao = $conexao->escape_string($descricao);

 $sql = "INSERT $nomeDaTabela VALUES(
              '$codigo',
              $preco,
              $estoque,
              '$classific',
              '$descricao')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do produto cadastrados com sucesso no banco de dados. </p>";