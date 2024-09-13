<?php
 //nesta include, vamos disparar, ao banco de dados, a consulta que conta quantos alunos foram aprovados em PRW2

 $sql = "SELECT COUNT(*) FROM $nomeDaTabela WHERE media >= 6";

 $resultado = $conexao->query($sql) or die($conexao->error);

 //acessar o objeto $resultado para recuperar o valor retornado pela consulta SQL
 $registro = $resultado->fetch_array();
 echo "<p> Número de alunos aprovados na UC de PRWII = <span> $registro[0] </span> </p>";

