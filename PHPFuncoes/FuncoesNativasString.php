<?php

// $nome = '     Fernanda     ';
// echo trim($nome);
// //tira os espaçoes

// $nomeSujo = '     Fernanda     ';
// $nomeLimpo = trim($nomeSujo);
// echo "NOME SUJO:  ".strlen($nomeSujo)."<br/>";
// echo "NOME LIMPO: ".strlen($nomeLimpo);
// //conta quantos caracteres temos em uma string

// $nome = 'Adrinao Rocha';
// echo strtolower($nome)."<br/>";
// //deixa todas as stirngs minusculas
// echo strtoupper($nome);
// //deixa todas as stirngs maiusculas

// $nome = 'Adrinao Rocha';
// $nomeAlterado = str_replace('Rocha', 'Silva', $nome);
// echo $nomeAlterado;
// //vai substituir a palavra q ta procurando 
// //procure por Rocha e substiue todas ocorrências por Silva nisso $nome
$fruta = 'banana';
$novo = str_replace('na', 'ob', $fruta); 
echo $novo. " " . $fruta;

// $nomeCompleto = 'Adrinao Rocha';
// $nome = substr($nomeCompleto, 0, 5)."<br/>"; 
// echo $nome;
// //pega apenas uma parte da string
// //$nomeCompleto, primeiro parametro
// //0, segunda parametro de onde eu quero pegar posição 0
// //5, onde termina

// $nome = substr($nomeCompleto, 3, 3)."<br/>"; 
// echo $nome;
// //pega a partir da posicao 3, 3 caracteres

// $nome = substr($nomeCompleto, -3, 3); 
// echo $nome;
// //se eu colocar - ele pega pela direita 

// $nomeCompleto = 'Bonieky Lacerda';
// $posicao = strpos($nomeCompleto, 'a');
// echo $posicao;
//procura em um determinado caractere dentro de outra string e retorna a posição q vei o q estamos procurando

// $nomeCompleto = 'Bonieky Lacerda';
// $posicao = strpos($nomeCompleto, 'z');
// echo $posicao;
// if ($posicao !== false) {
//     echo "ACHOU!";
// } else {
//     echo "NÂO ACHOU!";
// }

// $nomeCompleto = 'bonieky';
// echo ucfirst($nomeCompleto);
// //trasforma a primeira letra em maiuscula
// $nomeCompleto = 'bonieky lacerda leal';
// echo ucwords($nomeCompleto);
// //trasforma a primeira letra em maiuscula de todas as palavras

// $nomeCompleto = 'bonieky lacerda leal';
// $nomes = explode(' ', $nomeCompleto);
// print_r($nomes);
// //vai gerar um array de todas as strings
// //vai procurar por uma espaço e onde tiver espaco ele tira e o q tinha antes vira item do array e o q vem depois vira outro item do array
// //o primeiro parametro vai procurar qual vai ser o divisor p cada uma das palavras ou do q eu estiver procurando nesse caso é um espaço
// //o segundo parametro é a propria string

$numero = 12913.12;
echo 'R$ '.number_format($numero, 1, ',','.');
//formata os numeros
//primeiro parametro é o proprio numero
//segundo parametro é a qtde de decimais q ira ter
//o terceiro parametro é opcional e vc pode colocar qual vai ser o simbolo correspondente aos decimais no nosso caso será a virgula por padrao brasileiro
//o quarto parametro tbm é opcional é o simbolo q vai usar  pra separar os milhares no caso no brasil é o .