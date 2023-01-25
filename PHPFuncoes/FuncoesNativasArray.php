<?php

// $lista = ['nome1', 'nome2', 'nome3', 'nome4'];
// echo "TOTAL: ".count($lista);
// //funcao mostra qtos itens tem no array

################################################################

// // $lista = ['bonieky', 'pedro', 'paulo', 'jose', 'francisca', 'paula'];
// // $aprovados = ['bonieky', 'pedro', 'jose','francisca'];

// // $reprovados = array_diff($lista, $aprovados);
// // print_r($reprovados);
// // //funca pega a diferenca entre primeira lista e a segunda e vai gerar array dos itens da primeira lista q n estao na segunda  lista

// $numeros = [10, 20, 24, 91, 18];

// $filtrados = array_filter($numeros, function ($iiem){
//     if ($iiem < 30) {
//         return true;
//     }else {
//         return false;
//     }
// });
// print_r($filtrados);
// //filtra alguma coisa no array
// //primeiro parametro é o proprio array
// //segundo parametro é callback é uma função tem q criar funcao e mandar poder ser funcao anonima ou azer funcao e jogar aqui
// //fzdo funcao anomima a funcao vai recerber como parametro um numero especifico ele vai fazer loop em cada um dos itens array e ele vai receber o item no $item
// //qual objetivo dessa funcao é fazer verificacao q eu quiser e vai retornar true ou false 
// // quero gerar um novo array de filtrados so com numeros q sao abaixo de 30  
// //quando faco conficao if $filtrados so traz array com itens q esta abaixo de 30


################################################################
// $numeros = [10, 20, 24, 91, 18];

// $dobrados = array_map(function($item){
//     return $item * 2;
// }, $numeros);
// print_r($dobrados);

// //array_map n serve pra filtrar n vai retornar true ou false ele vai retornar todos os itens e eu posso fazer qqer alteração q eu quiser nesse $item

################################################################
// $numeros = [10, 20, 24, 91, 18];

// array_pop($numeros);

// //n precisa armazenar ele em uma variavel ele recebe um parametro por referencia entao ele vai fazer alteração no proprio item q mandar ou seja no $numeros entao n precisa de retorno
// //entao ele vai remover o ultimo item o array

// array_shift($numeros);
// //vai remover o primeiro item o array


// //se eu quiser remover o primeiro segundo so rodar dua vezes
// array_shift($numeros);
// array_shift($numeros);
// //vai remover o primeiro e o segundo  item o array

// ################################################################
// $numeros = [10, 20, 24, 91, 18];

// if (in_array(91, $numeros)) {
//     echo 'EXISTE!';
// }else {
//     echo 'NÂO EXISTE!';
// }
// //funca p buscar alguma coisa dentro de um array

// ################################################################
// $numeros = [10, 20, 24, 91, 18];

// $pos = array_search(91, $numeros);
// echo $pos;
// //array_search vai retornar a posição do item no array caso ache 

// ################################################################
// $numeros = [10, 20, 24, 91, 18];
// sort($numeros);
// print_r($numeros);
// //sort ordenou todo mundo em ordem crescente

// rsort($numeros);
// //rsort ordenou todo mundo em ordem decrescente

// asort($numeros);
// //asort ordenou todo mundo em ordem crescente mantendo a chave original do array

################################################################
$nomes = ['bonieky', 'lacerda', 'leal'];
$nome = implode('@', $nomes);

echo $nome;

//explode vai pegar uma string e trasformar em um array e eu coloco o artigo separador 
//inplode é o inverso pega array e trasforma em uma string eu coloco a cola q vai ser usada pra juntar os itens 
