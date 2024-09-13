<?php
 $crm       = trim($conexao->escape_string($_POST["crm"]));
 $medico    = trim($conexao->escape_string($_POST["nome-medico"]));

 $sql = "INSERT $nomeDaTabela1 VALUES(
              '$crm',
              '$medico')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do médico cadastrados com sucesso no banco de dados. </p>";