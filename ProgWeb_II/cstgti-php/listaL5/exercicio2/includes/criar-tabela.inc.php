<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
              codigo VARCHAR(20) PRIMARY KEY,
              preco DECIMAL(7,2),
              estoque INT,
              classificacao VARCHAR(50),
              descricao VARCHAR(1000)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);