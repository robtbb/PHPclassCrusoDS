<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> Fundamentos de banco de dados com PHP </h1>

 <form action="exercicio2.php" method="post">
  <fieldset>
   <legend> Cadastro de produtos </legend>

   <label class='alinha'> Forneça o código do produto: </label>
   <input type="text" name="codigo" autofocus> <br>


   <label class="alinha"> Preço unitário: </label>
   <input type="number" name="preco" min="0" step="0.01"> <br>

   <label class="alinha"> Quantidade em estoque: </label>
   <input type="number" min="0"  name="estoque"> <br>

   <label class="alinha"> Classificação do produto: </label> 
   <input type="radio" name="classific" value="perecível"> <label> Produto perecível </label> 
   <input type="radio" name="classific" value="não perecível"> <label> Produto não perecível </label> <br>

   <label class="alinha"> Descrição do produto: </label>
   <textarea name="descricao"></textarea> <br>

   <label class="alinha"> Escolha a operação desejada: </label>

   <select name="operacao">
    <option> Cadastrar dados </option>
    <option> Tabular dados </option>
    <option> Mostrar descrição </option>
    <option> Calcular faturamento </option>
   </select> <br> <br>

   <button name="processar-dados"> Executar operação selecionada </button>   
  </fieldset>
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-charset.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['processar-dados']))
   {
   //vamos descobrir qual operação foi escolhida pelo usuário no select do formulário
   $operacao = $_POST['operacao'];

   if($operacao == "Cadastrar dados")
    {
    require "../includes/cadastrar.inc.php";
    }

   if($operacao == "Tabular dados")
    {
    require "../includes/tabular-dados.inc.php";
    }

   if($operacao == "Mostrar descrição")
    {
    require "../includes/mostrar-descricao.inc.php";
    }

   if($operacao == "Calcular faturamento")
    {
    require "../includes/calcular-faturamento.inc.php";
    }  
   }
   
  require "../includes/desconectar.inc.php";
 ?>
    
</body> 
</html> 