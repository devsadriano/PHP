<?php
// Funções Recursivas é uma função q executa ela mesma internamente
// funcao do php p arredondar
// em exmplo pra usar funcao recursiva é p buscar arquivo dentor de pastas, ele busca o na primeira pasta depois vai p outras e outras ate a ultima ela entra em loop
function dividir($numero){
    $metade = $numero / 2;
    echo $metade."<br/>";

    if (round($numero) > 0){
        dividir($metade);
    }
}

dividir(100);