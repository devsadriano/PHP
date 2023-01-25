<?php
// arrow functions serve p quando temos uma só comando sendo executado 

// $dizimo = function($valor) {
//     return  $valor * 0.1;
// };

$dizimo = fn($valor) => $valor * 0.1;
// fn($valor) parametros
// => arrow function
// $valor * 0.1; expressao q eu quero fazer ou conta 
echo $dizimo(120);