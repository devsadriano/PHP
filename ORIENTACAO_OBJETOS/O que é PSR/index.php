<?php
//O que é PSR?  recomendações de padrao PHP
// Por muito tempo o PHP foi visto como a linguagem de programação rainha das possibilidades de gambiarras. Isso foi começando a mudar com a criação das?
//PSR’s.

// //um padrao e separar arquivos
// // 1 Arquivos DEVEM declarar símbolos (classes, funções, constantes, etc.) ou causar efeitos colaterais (por exemplo, gerar saída, alterar configurações .ini, etc.), mas NÃO DEVEM fazer ambos.
// //exemplo
// // esse aquivo fico responsavel pela implementacao 
// //index.php
// require 'matematica.php';

// echo "RESULTADO: ";
// $m = new Matematica($s);
// echo $m->somar(10, 20);

// //esse arquivo é responsavel pelas declaracoes de simbolos ou seja classes funcoes ... 
// //matematica.php

// class Matematica{
//     public function somar($x, $y){
//         return $x + $y;
//     }
// }

//declaracao classes tem q ser declaradas StudlyCaps ou seja primeira letra maiuscula
//constantes tem q ser declarada em cixa alta com underscore const VERSION ou DATE_APROVED
//metodos e "variaveis" tem q ser declarados c camelCase public function listarTodos()
