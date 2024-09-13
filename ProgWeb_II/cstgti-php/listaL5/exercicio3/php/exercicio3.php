<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> Fundamentos de banco de dados com PHP </h1>

 <form action="exercicio3.php" method="post">
  <fieldset>
   <legend> Módulo 1 - Cadastro de produtos </legend>

   <label class='alinha'> Forneça o código do produto: </label>
   <input type="text" name="codigo" autofocus> <br>


   <label class="alinha"> Preço unitário: </label>
   <input type="number" name="preco" min="0" step="0.01"> <br>

   <label class="alinha"> Quantidade em estoque: </label>
   <input type="number" min="0"  name="estoque"> <br>

   <button name="cadastro"> Cadastrar produto </button>   
  </fieldset>

  <fieldset>
   <legend> Módulo 2 - Atualizar produto </legend>

   <label class='alinha'> Código do produto pesquisado: </label>
   <input type="text" name="pesquisa-codigo"> <br>


   <label class="alinha"> Novo preço unitário: </label>
   <input type="number" name="altera-preco" min="0" step="0.01"> <br>

   <button name="alteracao"> Alterar preço do produto </button>   
  </fieldset>

  <fieldset>
   <legend> Módulo 3 - Excluir produto </legend>

   <label class="alinha"> Estoque mínimo para exclusão: </label>
   <input type="number" name="exclui-produto" min="0"> <br>

   <button name="exclusao"> Excluir produto com estoque mínimo </button>   
  </fieldset>
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-charset.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['cadastro']))
   {
   require "../includes/cadastrar.inc.php";
   }

  if(isset($_POST['alteracao']))
   {
   require "../includes/alterar-preco.inc.php";
   }

  if(isset($_POST['exclusao']))
   {
   require "../includes/excluir-preco.inc.php";
   }
   
  require "../includes/desconectar.inc.php";
 ?>
    
</body> 
</html> 