function inserirTexto() //cabeçalho da função
 {
 //corpo da função
 //criar, usando o DOM, dois objetos que representam o parágrafo e o cabeçalho na página web
 let objCabec = document.getElementById("cabec");
 let objParag = document.getElementById("parag");

 //acessar o conteúdo de texto dos dois objetos na página web
 let textoCabec = objCabec.innerHTML;
 let textoParag = objParag.innerHTML;

 //adicionar algum texto ao conteúdo das variáveis nas linhas 9 e 10
 textoCabec = textoCabec + " Texto adicionado dinamicamente pelo JavaScript.";
 textoParag = textoParag + " Texto adicionado dinamicamente pelo JavaScript.";

 //mandando o JavaSCript sobrescrever o conteúdo original de cada h1 e cada parágrafo, com o novo texto modificado
 objCabec.innerHTML = textoCabec;
 objParag.innerHTML = textoParag;
 }

