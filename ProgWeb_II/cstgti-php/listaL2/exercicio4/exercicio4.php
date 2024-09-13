<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="formata-formulario.css">
</head> 

<body> 
 <h1> Vetores em PHP - exercício 4 - listaL2 </h1>
 <?php
  //vamos criar um vetor com o nome de cada produto disponível no formulário e o seu preço de venda
  $vetorProdutos = ["Banana" => 3, "Miojo" => 2, "Pão de queijo" => 5];

  //antes de continuarmos com o processamento dos produtos, devemos testar se o cliente comprou alguma coisa. Em outras palavras, testamos se o checkbox foi marcado
  if(isset($_POST["produtos"]))
   {
   //recebendo os produtos comprados pelo usuário do formulário
   $vetorProdutosComprados = $_POST["produtos"]; //notar que o PHP recebe os dados de um checkbox e os armazena em um vetor

   //a seguir, usamos o laço foreach para percorrer o vetor de compras do usuário
   $soma = 0;
   foreach($vetorProdutosComprados as $nomeProduto)
    {
    $soma = $soma + $vetorProdutos[$nomeProduto];
    }
   $somaFormatada = number_format($soma, 2, ",", ".");
   echo "<p> Caro cliente, de acordo com a compra efetuada, o valor final a ser pago é de <span> $somaFormatada </span> </p>";
   }
  else
   {
   echo "<p> Caro usuário, você não adquiriu nenhum produto. O valor final da compra é zero. </p>";
   }

 ?>
 
</body> 
</html> 