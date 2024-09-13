<?php
 //forçamos o MySQL a usar a mesma tabela de símbolos do PHP e do HTML, para evitarmos problemas de acentuação
 $conexao->set_charset("utf8");