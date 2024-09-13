<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Vetores em PHP </title> 
  <link rel="stylesheet" href="exerc8.css">
</head> 

<body> 
 <h1> ListaL4 - exercício 8 - aquisição de medicamentos usando vetores em PHP - resposta do servidor </h1>
 <?php
  define("DESCONTO", 5/100);
  
  $vetorPrecos = ["Sal de fruta" => 60.00,
                  "Ansiolítico"  => 200.00,
                  "Analgésico"   => 20.00];

  if(!isset($_POST['medicamentos']))
   {
   exit("<p> Caro usuário, você não adquiriu nenhum de nossos medicamentos. O valor final da sua compra é de <span> R$0,00 </span>. Volte sempre! </p>
   
   <form action='exerc8.html' method='post'>
    <button> Retornar ao formulário de compra </button>
   </form>");
   }

  $vetorMedicamentosComprados = $_POST['medicamentos'];

  //vamos criar um laço de repetição sobre o vetor de produtos comprados. A seguir, com o nome de cada produto comprado, iremos até o vetor de preços e guardaremos o respectivo preço do produto adquirido, em uma variável somatória
  $soma = 0;

  foreach($vetorMedicamentosComprados as $remedio)
   {
   $soma += $vetorPrecos[$remedio];
   }

  //devemos lembrar que, se o cliente tiver 60 anos ou mais, ele obtém 5% de desconto no valor da compra. Vamos testar o checkbox relacionado à faixa etária do cliente
  $desconto = 0;

  if(isset($_POST['faixa-etaria']))
   {
   $desconto = DESCONTO * $soma;
   }
  
  //lembrar que devemos, antes de mostrar o resultado final do processamento, diminuir o valor od desconto do valor final da compra;
  $soma = $soma - $desconto;

  $somaFormatada = number_format($soma, 2, ",", ".");
  $descontoFormatado = number_format($desconto, 2, ",", ".");

  echo "<p> Caro usuário, o valor total da sua compra é de <span> R$$somaFormatada </span> 
            Seu desconto é de = <span> R$$descontoFormatado </span> </p>";

  echo "<p> Relação de medicamentos adquiridos: <br>";

  foreach($vetorMedicamentosComprados as $remedio)
   {
    echo "$remedio <br>";
   }
  echo "</p>";

  echo "<form action='exerc8.html' method='post'>
         <button> Retornar ao formulário de compra </button>
        </form>";
 ?> 
</body> 
</html> 