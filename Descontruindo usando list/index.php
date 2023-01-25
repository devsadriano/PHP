<?php
//O que faz a a função list?
//Cria variáveis como se fossem arrays.

$array = ['Bonieky', 90, 'café', 'azul'];

// //primeiro jeito de organizar
// $nome = $array[0];
// $idade = $array[1];
// $bebida = $array[2];
// $cor = $array[3];
// echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." com a cor ".$cor; 

//jeito mais didatico usando list
list($nome, $idade, $bebida, $cor) = $array;
echo $nome." tem ".$idade." anos e gosta de tomar ".$bebida." com a cor ".$cor; 
