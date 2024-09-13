<?php
 $codigoPesquisa  = $_POST["pesquisa-codigo"];
 $novoPreco       = $_POST["altera-preco"]; 

 $codigoPesquisa  = $conexao->escape_string($codigoPesquisa);
 $novoPreco     = $conexao->escape_string($novoPreco);
 
 $codigoPesquisa = trim($codigoPesquisa);
 $novoPreco      = trim($novoPreco);
 
 $sql = "UPDATE $nomeDaTabela SET preco=$novoPreco WHERE codigo='$codigoPesquisa'";

 $conexao->query($sql) or exit($conexao->error);

 //antes de mostrarmos a mensagem de preço alterado, devemos testar se o MySQL encontrou, na tabela, o código do produto fornecido no formulário
 if($conexao->affected_rows == 0)
  {
  echo "<p> Caro usuário, o código do produto fornecido não foi encontrado em nosso banco de dados. </p>";
  }
 else
  {
  echo "<p> Alteração de preço unitário efetuada com sucesso no banco de dados. </p>";
  }
