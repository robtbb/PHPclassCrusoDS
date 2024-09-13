
//usando o evento addEventListener com uma função anônima

let objBotao = document.getElementById('botao');
objBotao.addEventListener("click", function() 
  {
  let objNome1 = document.getElementById('nome1');
  let objNome2 = document.getElementById('nome2');
  let objParag = document.getElementById('conteiner');
  let mensagem;
  let iniciaisIguais;

  let nome1 = objNome1.value;
  let nome2 = objNome2.value;
  
  //podemos recuperar qualquer caracater de uma string por meio do método abaixo, bastando passarmos a posição, na estring, do caracter procurado
  let letraInicialNome1 = nome1.charAt(0);
  let letraInicialNome2 = nome2.charAt(0);

  //antes de testarmos os caracteres, convertemos ambos para maiúscula
  //letraInicialNome1 = letraInicialNome1.toUpperCase();
  //letraInicialNome2 = letraInicialNome2.toUpperCase();

  
  /*if(letraInicialNome1 == letraInicialNome2)
   {
   mensagem = "Sim, os nomes começam com a mesma letra, que é " + letraInicialNome1;
   }
  else
   {
   mensagem = "Não, os nomes não começam com a mesma letra. A letra do primeiro nome é " + letraInicialNome1 + " e a letra do segundo nome é " + letraInicialNome2; 
   }*/
  
  //outra forma de compararmos strings em JavaScript, sem levar em consideração a conversão de minúsculas em maiúsculas, ou vice-e-versa, é com o  método abaixo. Ele retorna zero se as strings forem iguais, independentemente de serem maiúsculas ou minúsculas. Em caso de caracteres acentuados, este método considera que os caracteres são iguais, se tiverem o mesmo acento, mesmo sendo maiúsculos ou minúsculos. Assim, são iguais as palavras Ágatha e ágatha. São diferentes os caracteres Á e Â, por exemplo
  iniciaisIguais = letraInicialNome1.localeCompare(letraInicialNome2, "pt-BR", {sensitivity: "accent"});
    
  if(iniciaisIguais == 0)
   {
   mensagem = "Sim, os nomes começam com a mesma letra, que é " + letraInicialNome1;
   }
  else
   {
   mensagem = "Não, os nomes não começam com a mesma letra. A letra do primeiro nome é " + letraInicialNome1 + " e a letra do segundo nome é " + letraInicialNome2; 
   }

  objParag.setAttribute("class", "mostra");
  objParag.innerHTML = mensagem;
  });