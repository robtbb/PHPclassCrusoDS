function mudarTema()
 {
 //devemos criar um objeto que representa a tag link, na página html. Esta tag, no final das contas, é quem faz o navegador controlar qual folha de estilos está sendo aplicada ao documento 
 let objLink = document.getElementById("tema");
 let temaAtual = objLink.getAttribute("href");


 //alterando, dinamicamente, o arquivo corrente do tema em CSS utilizado pelo navegador
 if(temaAtual == "estilos1.css")
  {
  objLink.setAttribute("href", "estilos2.css"); 
  }

  else
   {
    objLink.setAttribute("href", "estilos1.css"); 
   }
 }