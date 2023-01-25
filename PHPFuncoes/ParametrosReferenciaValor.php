<?php

//exemplos 
$lista = [4, 9, 2];

sort($lista);
//aqui a função sort pega os vcalores do array e exibe em ordem crescente
//nessa função o parametro dela e enviado via referencia 
// entoa ele vai sugar o array e vai fazer as alteracoes p ordenar 

// entao qdo coloco sort entre a definição 
//$lista = [4, 9, 2];
//print_r($lista);

//ele altero efetivamente
// um exemplo de funcao q recebe o parametro por referencia
print_r($lista);

