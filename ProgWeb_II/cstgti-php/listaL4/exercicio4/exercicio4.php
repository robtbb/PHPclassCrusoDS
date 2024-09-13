<?php
 function calcularDesconto($valorVenda)
  {
  define("TAXA_DESCONTO", 5/100);
  $desconto = $valorVenda * TAXA_DESCONTO;
  return $desconto;
  }

 //===============================================

 function calcularValorComissao($valorVenda, $percentualComissao)
  {
  $valorComissao = $valorVenda * $percentualComissao/100;
  return $valorComissao;
  }

 //===============================================

 function calcularValorFinalVenda($valorVenda, $descontoCartao)
  {
  $valorFinalVenda = $valorVenda - $descontoCartao;
  return $valorFinalVenda;
  }

 //================================================

 function mostrarResultados($valorVenda, $percentualComissao, $valorComissao, $descontoCartao, $valorFinalVenda)
  {
  $valorVendaFormatado = number_format($valorVenda, 2, ",", ".");

  $percentualComissaoFormatado = number_format($percentualComissao, 2, ",", ".");

  $valorComissaoFormatado = number_format($valorComissao, 2, ",", ".");

  $descontoCartaoFormatado = number_format($descontoCartao, 2, ",", ".");

  $valorFinalVendaFormatado = number_format($valorFinalVenda, 2, ",", ".");

  echo "<p> Resultado do processamento da venda efetuada: <br>
       Valor inicial da venda = <span> R$$valorVendaFormatado </span> <br>
       
       Percentual de comissão do vendedor = <span> {$percentualComissaoFormatado}% </span> <br>
       
       Valor da comissão do vendedor = <span> R$$valorComissaoFormatado </span> <br>
       
       Valor do desconto no pagamento com cartão = <span> R$$descontoCartaoFormatado </span> <br>
       
       Valor final da venda = <span> R$$valorFinalVendaFormatado </span> </p>";
  }  
?>
<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Modularização de código em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Funções de usuário em PHP - listaL4 - exercício 4 </h1>

 <form action="exercicio4.php" method="post">
  <fieldset>
   <legend> Processamento de vendas </legend>
   <label class="alinha"> Forneça o valor da venda efetuada: </label>
   <input type="number" name="venda" step="0.01" min='0' autofocus> <br> 

   <label class="alinha"> Forneça o percentual de comissão do vendedor: </label>
   <input type="number" name="percentual" step="0.1" min='0'> <label> % </label> <br> <br>
   
   <input type="checkbox" name="forma-pagamento" id="pagamento">

   <label for="pagamento"> Marque esta opção se o cliente pagou com cartão de fidelidade </label> <br>

   <button name="enviar-dados"> Processar venda </button>
  </fieldset>
 </form>
 
 <?php
  if(isset($_POST["enviar-dados"]))
   {
   $valorVenda = $_POST['venda']; 
   $percentualComissao = $_POST['percentual'];

   $descontoCartao = 0;
   
   if(isset($_POST['forma-pagamento']))
    {
    $descontoCartao = calcularDesconto($valorVenda);
    }
   
   $valorComissao = calcularValorComissao($valorVenda, $percentualComissao);

   $valorFinalVenda = calcularValorFinalVenda($valorVenda, $descontoCartao);

   mostrarResultados($valorVenda, $percentualComissao, $valorComissao, $descontoCartao, $valorFinalVenda);
   }    
 ?>
</body> 
</html> 