<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc3.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 3 - resposta do servidor </h1>
 <?php
  //criando constantes para armazenar taxas
  define("DESCONTO", 10/100);
  define('ICMS', 12/100);
  define("COMISSAO", 5/100);

  //criando a variável para guardar o valor da venda
  $valorVenda = $_GET["valor-venda"];

  //fazendo os cálculos solicitados na aplicação
  $valorDesconto = $valorVenda * DESCONTO;
  $valorICMS     = $valorVenda * ICMS;
  $valorComissao = $valorVenda * COMISSAO;

  //mostrando como fazer formatação de dados numéricos em PHP. LEMBRETE IMPORTANTÍSSIMO: esta formatação deve ser feita imediatamente antes de enviarmos estes valores numéricos de volta ao cliente, isto é, esta formatação é feita quando não precisamos utilizar as variáveis formatadas para nenhum cálculo numérico adicional
  $valorVenda    = number_format($valorVenda, 2, ",", ".");
  $valorDesconto = number_format($valorDesconto, 2, ",", ".");
  $valorICMS     = number_format($valorICMS, 2, ",", ".");
  $valorComissao = number_format($valorComissao, 2, ",", ".");

  echo "<p> Resultado do processamento da venda: <br>
            Valor total da venda = <span> R$$valorVenda </span><br>
            Valor do desconto da loja = <span> R$$valorDesconto </span> <br>
            Valor do ICMS = <span> R$$valorICMS </span> <br>
            Valor da comissão do vendedor = <span> R$$valorComissao </span> <br>
            Percentual de desconto dado pela loja ao cliente = <span>",  DESCONTO, "</span> </p>";
 ?>    
</body> 
</html> 