<?php

// function somar($n1, $n2) {
//     $total = $n1 + $n2;
//     return $total;
// }

// $soma = somar(10, 5);
// echo "TOTAL: " . $soma;

// outro exemplo
function somar($n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}

$x = somar(1, 3);
$y = somar(5, 3);
$w = somar($x, $y);
echo $w;
