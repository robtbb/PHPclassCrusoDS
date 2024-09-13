<?php
 //dividiremos esta tarefa em duas operações separadas. A primeira consulta traz a menor quantidade em estoque
 $sql = "SELECT MIN(estoque) FROM $nomeDaTabela";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();

 $menorEstoque = $registro[0];

 //a segunda consulta usa a menor quantidade em estoque descoberta para fazer o banco de dados retornar a descrição do produto que contém esta menor quantidade em estoque

 $sql = "SELECT descricao FROM $nomeDaTabela WHERE estoque = $menorEstoque";

 $resultado = $conexao->query($sql) or die($conexao->error);

 $registro = $resultado->fetch_array();

 $descricao = $registro[0];

 $menorEstoque = htmlentities($menorEstoque, ENT_QUOTES, "UTF-8");
 $descricao    = htmlentities($descricao, ENT_QUOTES, "UTF-8");

 echo "<p> Dados do produto com a menor quantidade em estoque: <br>
           Quantidade em estoque = <span> $menorEstoque </span> unidades <br>
           Descrição do produto = <span> $descricao </span> </p>";