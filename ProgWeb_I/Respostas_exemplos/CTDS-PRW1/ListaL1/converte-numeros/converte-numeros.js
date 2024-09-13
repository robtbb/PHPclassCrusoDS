function somar()
 {
 let soma;
 let objCaixa1 = document.getElementById('numero1');
 let objCaixa2 = document.getElementById('numero2');
 let numero1    = objCaixa1.value;
 let numero2    = objCaixa2.value;
 let objParag = document.getElementById('conteiner');

 //antes de prosseguir, vamos fazer o JS testar se o conteúdo dentro das duas variáveis  NÃO É UM NÚMERO. Caso verdadeiro, encerramos a aplicação
 numero1 = parseFloat(numero1);
 numero2 = parseFloat(numero2);

 if(isNaN(numero1) || isNaN(numero2))
  {
  objParag.innerHTML = "Um ou mais valores digitados não são números. Aplicação encerrada!";
  objParag.className = "mostra";
  }
 else
  {
  soma = numero1 + numero2;
  //para arredondar casas decimais, fazemos o seguinte
  soma = soma.toFixed(1);

  objParag.className = "mostra";

  objParag.innerHTML = "O valor da soma dos números " + numero1 + " e " + numero2 + " é igual a " + soma;
  }
 }