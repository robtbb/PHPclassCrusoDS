<?php
 $paciente     = trim($conexao->escape_string($_POST["nome-paciente"]));
 $crmAtend     = trim($conexao->escape_string($_POST["crm-atendimento"]));
 $data         = trim($conexao->escape_string($_POST["data"]));

 //antes de cadastrar o paciente, vamos pedir ao PHp que verifique, no banco de dados, se o crm digitado já está cadastrado
 $sql = "SELECT crm FROM $nomeDaTabela1 WHERE crm = '$crmAtend'";
 $conexao->query($sql) or die($conexao->error);

 //detectar a condição de erro
 if($conexao->affected_rows == 0)
  {
  exit("<p> O CRM do médico fornecido não existe em nosso banco de dados. Aplicação encerrada. Tente novamente! </p>");
  }

 $sql = "INSERT $nomeDaTabela2 VALUES(
               null,
              '$paciente',
              '$data',
              '$crmAtend')";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados do paciente com sucesso no banco de dados. </p>";