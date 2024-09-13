
//usando o evento addEventListener com uma função anônima

let objBotao = document.getElementById('botao');
objBotao.addEventListener("click", function() 
  {
  let objRaio = document.getElementById('raio');
  let objParag = document.getElementById("conteiner");
  let raio    = objRaio.value;
  let area    = raio * raio * Math.PI;
  area = area.toFixed(1); //arredondamento de uma casa decimal
  objParag.setAttribute("class", "mostra");
  objParag.innerHTML = "Raio do círculo = " + raio + "<br> Valor da área = " + area;
  });