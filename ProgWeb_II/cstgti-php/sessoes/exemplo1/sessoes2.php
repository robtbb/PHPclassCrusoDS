<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Sessões com PHP </title> 
  <link rel="stylesheet" href="formata-sessoes.css">
</head> 

<body> 
 <h1> Como ler e apagar variáveis de sessão em PHP </h1>

 <form action="sessoes2.php" method="post">
  <fieldset>
   <legend> Leitura e exclusão dos dados de uma sessão </legend>

   <button name="mostrar-sessao"> Mostrar dados das variáveis de sessão </button>   
   <button name="excluir-sessao"> Apagar variáveis de sessão </button>   
  </fieldset>  
 </form>

 <a href='sessoes1.php'> Cadastrar nova sessão </a>

 <?php
  //abertura da sessão
  session_start();
  if(isset($_POST['mostrar-sessao']))
   {
   //antes de acessarmos o vetor $_SESSION, devemos executar o teste abaixo
   if(isset($_SESSION['aluno']) and isset($_SESSION['media']))
    {
    //as variáveis de sessão existem - podemos acessá-las e tratar estes dados como quisermos
    $aluno = $_SESSION['aluno'];
    $media = $_SESSION['media'];

    echo "<p> Dados recuperados das variáveis de sessão: <br>
              Nome do aluno: <span> $aluno </span> <br>
              Média final de PRWII: <span> $media </span> </p>";
    }
   else
    {
     echo "<p> Dados da sessão indisponíveis! </p>";
    }
   }

  //botão de encerrar a sessão - logout da aplicação
  if(isset($_POST['excluir-sessao']))
   {
    if(isset($_SESSION['aluno']) and isset($_SESSION['media'])) 
     {
     //apagando os dados da sessão
     $_SESSION = [];
     session_destroy();
     echo "<p> Variáveis de sessão eliminadas com sucesso! </p>";
     }
    else
     {
      echo "<p> Dados da sessão indisponíveis! </p>";
     }
   }
 ?>    
</body> 
</html> 