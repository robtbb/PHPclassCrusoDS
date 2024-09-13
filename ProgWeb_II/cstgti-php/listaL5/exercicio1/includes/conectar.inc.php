<?php
 //ligação entre o nosso código em PHP e o MySQL
 $conexao = new mysqli($servidor, $usuario, $senha) or exit($conexao->error);