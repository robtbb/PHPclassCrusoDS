function adicionarTexto()
 {
 //Vamos fazer o JS criar uma representação da tag parágrafo da página web. Aqui, dentro do código JS, a tag <p> será representada por uma variável especial, mais precisamente, um objeto, por meio do DOM. Isso só é possível graças ao atributo id

 let objParagrafo = document.getElementById('paragrafo');

 //vamos acrescentar texto dinâmico ao parágrafo na página web manipulando o objeto objParagrafo
 objParagrafo.innerHTML = "Este é um texto dinâmico, criado a partir de comandos da linguagem JavaScript, e inserido automaticamente dentro do parágrafo na página web.";
 }