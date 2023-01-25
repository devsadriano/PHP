<?php
//$n3 = 0 defino valor padrao 0 e se eu omitir o $n3 a vaiavel vai assumir valor padrao e n vai dar erro
// function somar($n1, $n2, $n3 = 0) {
//     $total = $n1 + $n2 + $n3;
//     return $total;
// }

// $x = somar(1, 3);
// $y = somar(5, 3);
// $w = somar($x, $y);
// echo $w;


//outro exemplo
function somar(int $n1, int $n2 = 0, int $n3 = 0) {
    $total = $n1 + $n2 + $n3;
    return $total;
}

$z = somar(7, 3);
echo $z;
