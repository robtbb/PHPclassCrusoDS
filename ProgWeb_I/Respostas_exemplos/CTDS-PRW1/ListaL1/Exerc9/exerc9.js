function converterTemp()
 {
 let objCaixa = document.getElementById('tempF');
 let tempF    = objCaixa.value;
 //console.log(tempF);

 //transformar a temp para celsius - para as operações matemáticas que não envolvem soma, o próprio JavaScript se encarrega de fazer a conversão  numérica
 let tempC = (5/9) * (tempF - 32);

 //mostrar o valor transformado
 let objParag = document.getElementById('conteiner');
 objParag.innerHTML = "Resultado da conversão: <br> Temperatura em ºF = " + tempF + "<br> Temperatura convertida para ºC = " + tempC;

 //lembrar que, neste momento, o parágrafo está oculto. Vamos torná-lo visível por meio do JavScript. O que o JS deve fazer é obrigar o navegador a aplicar a classe mostra (já presente no CSS) no objParag
 objParag.className = "mostra";
 }

 //função para esconder o parágrafo que, neste momento, está visível
 function esconderParag(objParag)
  {
  objParag.className = ""; 
  }