<?php
// Array_Slice serve pra cortar o array no meio ou onde que eu queira
//slice é fatia 
// vai criar novo array c a copia do pedaco  
// 1 parametro proprio array q quero cortar  
// 2 parametro por onde q eu quero comecar cortar
// 3 parametro qtos itens quero pegar

// $array = ['a', 'b', 'c', 'd', 'e', 'f'];

// $retorno = array_slice($array, 0, 2);

// print_r($retorno);


#################################################

//Array_Slice
// vai modificar o proprio array q to mandando
// 1 parametro proprio array
// 2 parametro de onde quero comecar
// 3 parametro  quantos itens quero remover
// começa do 1 e remove 1 entao vai remover o b
// 4 parametro é o item q ele vvai fazer a insercao 

// outra funcao do array é adicionar campo apos remocao
// vai tirar o b e inserir k  
$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 1, 1, 'k');

print_r($array);