function juntarTexto()
 {
 //acessando os dois parágrafos da página web
 let objParag1 = document.getElementById("parag1");
 let objParag2 = document.getElementById("parag2");
 let objDiv    = document.getElementById("conteiner");

 //guardando o texto de cada parágrafo dentro de uma variável JS
 let textoParag1 = objParag1.innerHTML;
 let textoParag2 = objParag2.innerHTML;
 let textoUnido  = textoParag1 + "<br> <br>" + textoParag2;

 //inserindo o texto dentro da div na página web - lembrar que a div está oculta e devemos dizer ao JS para que ela se torne visível
 objDiv.style.display = "block";
 objDiv.innerHTML = "<ul> <li>" + textoUnido + "</li> </ul>";
 }