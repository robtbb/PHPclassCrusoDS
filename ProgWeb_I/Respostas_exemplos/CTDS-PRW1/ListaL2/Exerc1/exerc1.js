
function tratarTriangulo()
 {
 let objHipotenusa = document.getElementById('hipotenusa');
 let objCateto     = document.getElementById('cateto');
 let objAltura     = document.getElementById('altura');

 let hipotenusa = objHipotenusa.value;
 let cateto     = objCateto.value;
 let altura     = objAltura.value;

 let area, mensagem;
 let objParag = document.getElementById('conteiner');

 //calcular a área do triângulo

 area = (cateto * altura)/2;

 //testar se o triângulo é isósceles
 if(hipotenusa == cateto || hipotenusa == altura || cateto == altura)
  {
  mensagem = "Sim, o triângulo testado é isósceles";
  }
 else
  {
  mensagem = "Não, o triângulo testado não é isósceles";
  }
 
 //mostrar o parágrafo
 objParag.setAttribute("class", "mostra");

 objParag.innerHTML = "A área do triângulo fornecido vale = " + area + "<br>" + mensagem;
 
 }

//associando o botão html a um objeto botão no JS
let objBotao = document.getElementById('botao');

//associar o método addEventListener() ao objeto botão
objBotao.addEventListener("click", tratarTriangulo);