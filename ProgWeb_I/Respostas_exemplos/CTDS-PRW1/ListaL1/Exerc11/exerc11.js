function calcularArea()
 {
 let objCaixa = document.getElementById("raio");
 let objParag = document.getElementById("conteiner");
 let raio = objCaixa.value;

 let area = Math.PI * Math.pow(raio, 2);

 objParag.setAttribute("class", "mostra");

 area = area.toFixed(1);

 //troca o ponto decimal pela vírgula
 area = area.replace(".", ",");
 objParag.innerHTML = "A área do círculo de raio igual a " + raio + "cm vale " + area + "cm&sup2;"; 
 }