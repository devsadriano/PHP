<?php
//$idade = 90;

// if ($idade < 18) {
//     echo 'Menor idade';
// }else {
//     echo 'Maior de idade';
// }

// ternario
//$idade = 18;
// (Condição) ? RESULTADO POSITIVO : RESULTADO NEGATIVO;
//echo ($idade < 18) ? 'Menor idade' : 'Maior de idade';

// ou armazenar em uma variavel
//$idade = 18;
//$resultado =  ($idade < 18) ? 'Menor idade' : 'Maior de idade';
//echo $resultado;

// // ou testar booleean
// $idade = 18;
// $menorIdade =  ($idade < 18) ? true : false;
// if ($menorIdade) {
//     echo 'Menor de idade';
// } else {
//     echo 'Maior de idade';
// }

//Condicional NULL CAO
// é uma simplificação do ternario
$nome = 'Adrinao';
$sobrenome = 'Rocha';
$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
// ou
$nomeCompleto .= $sobrenome ?? '';


echo $nomeCompleto;

