<?php
//Função sem nome que pode ser armazenada em variáveis ou em parâmetros.
//como usamos funcoes anomimas
// primeiro armazenando elas dentro de uma variavel e passando de uma variavel p outra variavel
// ou passando como parametro p uma outra funcao q agente crio ou uma funcao nativa do php entre outras formas

// $dizimo = function (int $valor) { 
//     return $valor * 0.1;
// };
// // aqui criamos uma funcao anonima e armazenamos ela dentro de uma variavel
// // e como usamos a função anonima
// echo $dizimo(90);
// //entao podemos pegar essa funcao e jogar ela em outra varavel


//continuando o exemplo
$dizimo = function (int $valor) { 
    return $valor * 0.1;
};
$funcaooo = $dizimo;
echo $funcaooo(82);
//entao podemos passar essa funcao anonima como parametro de qqer outra função



//um exemplo
// algumafuncao(10, $function(){
//     aqui eu crio a funcao do jieot q quiser
// });