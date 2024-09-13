<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Fundamentos do PHP </title> 
  <link rel="stylesheet" href="exerc7.css">
</head> 

<body> 
 <h1> Fundamentos do PHP - listaL3 - exercício 7 - resposta do servidor </h1>
 <?php
  $valorCompra = $_POST['valor-compra'];

  if(isset($_POST['forma-pagamento']))
   {
   //se o PHP executar este bloco de comandos, significa que o usuário selecionou um dos dois botões de rádio relacionados à forma de pagamento
   $formaPagamento = $_POST['forma-pagamento'];
   $desconto = 0;

   if($formaPagamento == "Sim")
    {
    //se o PHP excutar este bloco de código, significa que o cliente pagou com cartão. Calculamos o valor do desconto
    $desconto = $valorCompra * 5/100;
    }   
   }
  else
   {
   //se o PHP desviou para este bloco, significa que nenhuma informação relacionada à forma de pagamento foi fornecida no formulário, isto é, nenhum botão de rádio foi acionado. Portanto, temos um erro grave de processamento dos dados. Consequentemente, o script deve ser finalizado com o comando exit() ou die()
   exit("<p> ERRO: a forma de pagamento não foi fornecida. Aplicação encerrada! </p> <br>
        <form action='exerc7.html' method='post'>
          <button> Retornar ao formulário </button>
         </form>");
   } 
   
   
  //vamos repetir todo o procedimento acima, novamente, agora, testando os botões de rádio relacionados à entrega a domicílio
  if(isset($_POST['forma-entrega']))
   {
   $formaEntrega = $_POST['forma-entrega'];
   $acrescimo = 0;

   if($formaEntrega == "Sim")
    {
    $acrescimo = $valorCompra * 2/100;
    }   
   }
  else
   {   
   exit("<p> ERRO: a forma de entrega não foi fornecida. Aplicação encerrada! </p> <br>
        <form action='exerc7.html' method='post'>
          <button> Retornar ao formulário </button>
         </form>");
   }

  $valorFinalCompra = $valorCompra - $desconto + $acrescimo;
  $valorFinalCompraFormatado = number_format($valorFinalCompra, 2, ",", ".");

  echo "<p> Caro usuário, informamos que o valor final da compra do cliente, considerando descontos e acréscimos, é igual a <span> R$$valorFinalCompraFormatado </span> <br>
  Valor do acréscimo: <span> R$$acrescimo </span> <br>
  Valor do desconto: <span> R$$desconto </span> </p>";
 ?> 
 
 <form action="exerc7.html" method="post">
  <button> Retornar ao formulário </button>
 </form>
</body> 
</html> 