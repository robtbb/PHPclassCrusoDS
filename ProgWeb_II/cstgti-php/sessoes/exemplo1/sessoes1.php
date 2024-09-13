<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Sessões com PHP </title> 
  <link rel="stylesheet" href="formata-sessoes.css">
</head> 

<body> 
 <h1> Fundamentos de sessões com PHP </h1>

 <form action="sessoes1.php" method="post">
  <fieldset>
   <legend> CSTGTI-PRWII-rendimento semestral do aluno </legend>

   <label class='alinha'> Forneça o nome do aluno: </label>
   <input type="text" name="aluno" autofocus> <br>


   <label class="alinha"> Forneça a média final do aluno em PRWII: </label>
   <input type="number" name="media" min="0" max="10" step=".1"> <br>

   <button name="cadastrar"> Criar sessão e guardar dados </button>   
  </fieldset>  
 </form>

 <?php
  if(isset($_POST['cadastrar']))
   {
   //registrar o início da sessão 
   session_start();
   $aluno = $_POST['aluno'];
   $media = $_POST['media'];

   //criando duas variáveis de sessão para guardar estes dados, que poderão ser acessados em qualquer outro arquivo da nossa aplicação
   $_SESSION['aluno'] = $aluno;
   $_SESSION['media'] = $media;

   echo "<a href='sessoes2.php'> Mostrar dados da sessão </a>";
   }
 ?>    
</body> 
</html> 