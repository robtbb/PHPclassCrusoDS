<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Vetores em PHP - exercício 8 - listaL2 </h1>
 <?php
  define("TAXA_DESCONTO", 5/100);
  
  $vetorProdutos = ["Dipirona" => 3, "Rivotril" => 2, "Luftal" => 5];

  if(isset($_POST["produtos"]))
   {
   $vetorProdutosComprados = $_POST["produtos"]; //

   $soma = 0;
   foreach($vetorProdutosComprados as $nomeProduto)
    {
    $soma = $soma + $vetorProdutos[$nomeProduto];
    }


   //antes do cálculo do valor final da compra, temos que descobrir se o cliente tem direito ao desconto
   $desconto = 0;
   if(isset($_POST['faixa-etaria']))
    {
    $desconto = $soma * TAXA_DESCONTO;
    }
   $valorFinalCompra = $soma - $desconto;

   $valorFinalCompraFormatada = number_format($valorFinalCompra, 2, ",", ".");
   echo "<p> Caro cliente, de acordo com a compra efetuada, o valor final a ser pago é de <span> $$valorFinalCompraFormatada </span> </p>";
   }
  else
   {
   echo "<p> Caro usuário, você não adquiriu nenhum produto. O valor final da compra é zero. </p>";
   }

 ?>
 
</body> 
</html> 