let objParagrafo = document.getElementById("paragr1");
let textoDoParagrafoOriginal = objParagrafo.innerHTML;

//alert(textoDoParagrafo);
let novoTextoDoParagrafo = textoDoParagrafoOriginal + " Este texto é dinâmico, gerado automaticamente pelo JavaScript.";

//alterando o texto do parágrafo na página web
objParagrafo.innerHTML = novoTextoDoParagrafo;