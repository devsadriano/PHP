<?php
//Qual conceito da função key_exists ?
//Checa se uma chave ou índice existe em um array;

$array  = [
    'nome' => 'Bonieky',
    'idade' => 90,
    'empresa' => 'B7WEB',
    'cor' => 'Azul',
    'profissao' => 'Fazedor Bolo'
];

if (key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo $idade." anos";
}else{
    echo "Não tem idade.";
}

//serve p verificar se um array determinado tem uma determinada chave
//aqui eu to vendo o q tem array mas se eu pegar de BD ou de outro lugar e n sei o q tem array mas vou sar a idade por exemplo pra fazer uma conta entoa fazemos uma verificacao com if e a funcao key_exists()

// key_exists() 
// 1 parametro o q to procurando
// 2 parametro onde do procurando
//ela vai retornar true ou false se ela achar retorna true senao false

// entao eu verifico tem chave idade no meu array
//    $idade = $array['idade'];
//    echo $idade." anos";
//se tiver usa ele e exibe a idade senao mostra a msg
// isso evita de estar usando uma chave q n existe