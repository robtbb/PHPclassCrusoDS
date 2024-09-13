
function calcularMedia()
 {
 let objAluno = document.getElementById("aluno"); 
 let objNota1 = document.getElementById("nota1"); 
 let objNota2 = document.getElementById("nota2"); 
 let objNota3 = document.getElementById("nota3"); 
 let objParag = document.getElementById("conteiner");

 let aluno = objAluno.value;
 let nota1 = objNota1.value;
 let nota2 = objNota2.value;
 let nota3 = objNota3.value;

 nota1 = parseFloat(nota1);
 nota2 = parseFloat(nota2);
 nota3 = parseFloat(nota3);

 let media = (nota1 + nota2 + nota3) / 3;

 media = media.toFixed(1);

 objParag.setAttribute("class", "mostra");

 objParag.innerHTML = "Resultados do cálculo da média: <br> Nome do aluno: " + aluno + "<br> Nota1: " + nota1 + "<br> Nota2: " + nota2 + "<br> Nota3: " + nota3 + "<br> Média do aluno: " + media;
 }

 let objBotao = document.getElementById("botao");

objBotao.addEventListener("click", calcularMedia);