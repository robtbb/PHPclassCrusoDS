<?php
 $nomeMedico    = trim($conexao->escape_string($_POST["pesquisa-nome-medico"]));

 $sql = "SELECT COUNT(*) FROM $nomeDaTabela2 WHERE crm_atendimento = (SELECT crm FROM $nomeDaTabela1 WHERE medico = '$nomeMedico')";

 $resultado = $conexao->query($sql) or exit($conexao->error);
 $vetorRegistro = $resultado->fetch_array();
 $numeroPacientesAtendidos = $vetorRegistro[0];

 echo "<p> O número de pacientes atendidos pelo médico <span> $nomeMedico </span> e que estão internados em nossa clínica é igual a <span> $numeroPacientesAtendidos </span> pacientes.  </p>";