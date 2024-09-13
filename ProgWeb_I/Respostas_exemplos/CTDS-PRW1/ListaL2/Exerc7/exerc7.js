
function processarVenda()
 {
 let mensagem = "Seu cartão de crédito continua com saldo positivo";
 let objSaldoCartaoCredito = document.getElementById("saldo");
 let objProduto1           = document.getElementById("preco1");
 let objProduto2           = document.getElementById("preco2");

 let saldo  = objSaldoCartaoCredito.value;
 let preco1 = objProduto1.value;
 let preco2 = objProduto2.value;

 let objParag = document.getElementById("conteiner");

 preco1 = parseFloat(preco1);
 preco2 = parseFloat(preco2);

 let valorCompra =preco1 + preco2;
 let saldoFinalCartao = saldo - valorCompra;

 if(saldoFinalCartao < 0) 
   {
   mensagem = "O valor do saldo do seu cartão de crédito está negativo";
   }

 valorCompra = valorCompra.toFixed(2);
 saldoFinalCartao = saldoFinalCartao.toFixed(2);

 objParag.setAttribute("class", "mostra");

 objParag.innerHTML = "Resultado do processamento da compra: <br>" + "Valor total da compra = R$" + valorCompra + "<br>Saldo do cartão após a compra = R$" + saldoFinalCartao + "<br>" + "<span>" + mensagem + "</span>";

 //document.getElementById("span").style.color = "red";
 }

let objBotao = document.getElementById("botao");
objBotao.addEventListener("click", processarVenda);