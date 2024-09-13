<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela(
              codigo VARCHAR(20) PRIMARY KEY,
              preco DECIMAL(7,2),
              estoque INT) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);