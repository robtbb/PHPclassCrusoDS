function trocarCorDoTexto(botao)
 {
 //lembre-se que o parâmetro que chamamos de botao recebe o "curinga" this. This, por sua vez, dentro desta função, estará associado ao elemento <button> da página web
 botao.style.backgroundColor = "#90EE90";
 botao.style.fontWeight = "bold";
 botao.style.color = "red";

 //note que a linguagem JS permite alterar diretamente a aplicação de estilos (CSS) aos elementos de uma página web, por meio da propriedade style, associada ao objeto que representa este elemento na página web
 }