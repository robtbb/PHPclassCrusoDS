<?php
 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela1(
              crm VARCHAR(20) PRIMARY KEY,
              medico VARCHAR(500)) ENGINE=innoDB";

 $conexao->query($sql) or exit($conexao->error);

 $sql = "CREATE TABLE IF NOT EXISTS $nomeDaTabela2(
              id INT PRIMARY KEY AUTO_INCREMENT,
              nome VARCHAR(500),
              data_internacao DATE,
              crm_atendimento VARCHAR(20),
              FOREIGN KEY(crm_atendimento)
              REFERENCES $nomeDaTabela1(crm)) ENGINE=innoDB";

 $conexao->query($sql) or die($conexao->error);