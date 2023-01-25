<?php
//funcao pra cirar array ja com valores dentro do array
// 1 parametro qual item q vai comecar
// 2 parametro o item q vai terminar
// 3 parametro qtde de itens q vai pular 
// $array = [1, 2, 3];
// foreach ($array as $value) {
//     echo $value."<br/>";
// }


// $array = range(1, 20, 2);
// foreach ($array as $item) {
//     echo $item."<br/>";
// }


// $array = range('a', 'g');
// foreach ($array as $item) {
//     echo $item."<br/>";
// }


// $array = range(50, 20);
// foreach ($array as $item) {
//     echo $item."<br/>";
// }

// //eu quero os dias do mes
// $array = range(1, 30);
// foreach ($array as $item) {
//     echo $item."<br/>";
// }

//eu quero os meses
$array = range(1, 12);
foreach ($array as $item) {
    echo $item."<br/>";
}