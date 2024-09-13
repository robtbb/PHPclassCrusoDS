<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="../css/formata-banco.css">
</head> 

<body> 
 <h1> Fundamentos de banco de dados com PHP </h1>

 <form action="exercicio4.php" method="post">
  <fieldset>
   <legend> Módulo 1 - Cadastro de médicos </legend>

   <label class='alinha'> Forneça o CRM do médico: </label>
   <input type="text" name="crm" autofocus> <br>


   <label class="alinha"> Nome do médico: </label>
   <input type="text" name="nome-medico"> <br>

   <button name="cadastro-medico"> Cadastrar médico </button>   
  </fieldset>

  <fieldset>
   <legend> Módulo 2 - Cadastro do paciente </legend>

   <label class='alinha'> Nome do paciente: </label>
   <input type="text" name="nome-paciente"> <br>


   <label class="alinha"> CRM do médico responsável: </label>
   <input type="text" name="crm-atendimento"> <br>

   <label class="alinha"> Data da internação: </label>
   <input type="date" name="data"> <br>
   

   <button name="cadastro-paciente"> Cadastrar paciente </button>   
  </fieldset>

  <fieldset>
   <legend> Módulo 3 - Pesquisa por médico </legend>

   <label class="alinha"> Nome do médico pesquisado: </label>
   <input type="text" name="pesquisa-nome-medico"> <br>

   <button name="pesquisa-medico"> Pesquisar médico </button>   
  </fieldset>
 </form>

 <?php
  require "../includes/dados-conexao.inc.php";
  require "../includes/conectar.inc.php";
  require "../includes/criar-banco.inc.php";
  require "../includes/abrir-banco.inc.php";
  require "../includes/definir-charset.inc.php";
  require "../includes/criar-tabelas.inc.php";

  if(isset($_POST['cadastro-medico']))
   {
   require "../includes/cadastrar-medico.inc.php";
   }

  if(isset($_POST['cadastro-paciente']))
   {
   require "../includes/cadastrar-paciente.inc.php";
   }

  if(isset($_POST['pesquisa-medico']))
   {
   require "../includes/pesquisar-medico.inc.php";
   }
   
  require "../includes/desconectar.inc.php";
 ?>
    
</body> 
</html> 