<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> Fundamentos de banco de dados com PHP </h1>

 <form action="exercicio1.php" method="post">
  <fieldset>
   <legend> Rendimento semestral do aluno </legend>

   <label class='alinha' for='nome'> Nome do aluno: </label>

   <input type="text" id="nome" name="aluno" autofocus> <br>

   <label class="alinha" for="matricula"> Matrícula do aluno: </label>

   <input type="text" id="matricula" name="matric"> <br>

   <label for='media' class="alinha"> PRW - média final: </label>

   <input type="number" min="0" max="10" id="media" step="0.1" name="media"> <br>

   <div class="botoes">
    <button name="cadastrar"> Cadastrar aluno no banco de dados </button>

    <button name="tabular-dados"> Tabular dados dos alunos </button>

    <button name="contar-aprovados"> Mostrar número de aprovados </button>
   </div>
  </fieldset>
 </form>

 <?php
  //neste ponto do código, vamos inserir todas as includes que serão responsáveis por apresentar cada uma das etapas de conexão do nosso código em PHP com o banco de dados
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-charset.inc.php";
  require "../includes/criar-tabela.inc.php";

  if(isset($_POST['cadastrar']))
   {
   require "../includes/cadastrar.inc.php";
   }

  if(isset($_POST['tabular-dados']))
   {
   require "../includes/tabular-dados.inc.php";
   }

  if(isset($_POST['contar-aprovados']))
   {
   require "../includes/contar-aprovados.inc.php";
   }

  require "../includes/desconectar.inc.php";
 ?>
    
</body> 
</html> 