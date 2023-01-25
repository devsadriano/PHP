<!-- A função reduce para manipular array, tem como objetivo reduzir um array a um número. Dito isto, analise as alternativas e marque a correta.] -->

<?php
// Janeiro a Junho
$feriadosNoAno = [
 ['mes' => 'janeiro', 'quantidade' => 0],
 ['mes' => 'fevereiro', 'quantidade' => 2],
 ['mes' => 'março', 'quantidade' => 5],
 ['mes' => 'abril', 'quantidade' => 0],
 ['mes' => 'maio', 'quantidade' => 1],
 ['mes' => 'junho', 'quantidade' => 0],
];

function somarFeriado($acc, $item) {
 $acc += $item['quantidade'];
 
 return $acc;
}

echo $total = array_reduce($feriadosNoAno, 'somarFeriado');

// RESULTADO SERÁ 8