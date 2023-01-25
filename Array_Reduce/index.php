<?php
//Array_Reduce
//a funca vai pegar o array q qu mandar pra ela ela vai executar uma função em cada um dos itens q tem dentor array
//entao tenho q criar funcao e um array
// e o resultado vai reduzir todo array a um iten so
//1 parametro proprio array
//2 parametro mandar nome de uma funcao pra ele executar 
// 3 parametro vai definir o valor inicial do subtotal
// se eu n colocar nada comeca com 0 agora se eu colocar 2 ele comeca a partir 2 item array
$numeros = [1, 2, 3, 4, 5];

//1 parametro funcao é um subtotal comeca c valor 0 e retorna ele mesmo
// entao o subtotal vai sendo o valor total q vai sendo incrementado a cada vez passa pelo itens array
// $subtotal = $subtotal + $item; aq eu to adicionando o subtotal ao proprio item
// ou seja a 1 vez q for executada vai ser 0 + 1 = 1
// segunda vez subtotal é 1 + 2 = 3     
function somar($subtotal, $item){
    $subtotal = $subtotal + $item;    
    return $subtotal;
}    

$total = array_reduce($numeros, 'somar');

echo $total;