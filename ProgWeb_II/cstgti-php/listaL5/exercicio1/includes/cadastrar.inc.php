<?php
 //comandos para o recebimento de dados do formulário e o posterior cadastro no banco de dados
 $matricula = $_POST["matric"];
 $aluno     = $_POST["aluno"];
 $media     = $_POST["media"];

 //cuidado com a injeção de SQL aqui - neste ponto, usamos os recursos da linguagem PHP para varrer toda informação recebida do formulário e, encontrando algum indício de tentativa de invasão ao servidor, eliminar a informação "perigosa"
 $matricula = $conexao->escape_string($matricula);
 $aluno     = $conexao->escape_string($aluno);
 $media     = $conexao->escape_string($media);

 //criamos a consulta SQL que envia os dados a serem cadastrados no banco de dados
 $sql = "INSERT $nomeDaTabela VALUES(
              '$matricula',
              '$aluno',
              $media)";

 $conexao->query($sql) or exit($conexao->error);

 echo "<p> Dados cadastrados com sucesso no banco de dados. </p>";