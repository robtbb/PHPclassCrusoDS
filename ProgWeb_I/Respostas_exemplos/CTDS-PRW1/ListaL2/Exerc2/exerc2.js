function converterTemp()
 {
 let objTempF = document.getElementById("tempF");
 let objParag = document.getElementById("conteiner");
 let tempF    = objTempF.value;
 let tempC    = (5/9) * (tempF - 32);

 tempC = tempC.toFixed(1);

 objParag.setAttribute("class", "mostra");
 objParag.innerHTML = "Dados da conversão termométrica: <br> Temperatura em ºF = " + tempF + "ºF <br> Temperatura convertida em ºC = " + tempC + "ºC";
 }

let objBotao = document.getElementById('botao');
objBotao.addEventListener("click", converterTemp);