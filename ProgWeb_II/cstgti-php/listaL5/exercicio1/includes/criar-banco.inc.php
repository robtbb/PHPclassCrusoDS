<?php
 //esta etapa representa a criação do banco de dados no servidor. Ela é opcional
 $sql = "CREATE DATABASE IF NOT EXISTS $nomeDoBanco";

 $conexao->query($sql) or exit($conexao->error);