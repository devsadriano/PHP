<?php
//O que é Namespace no PHP ?
//Método que encapsula o nome de uma classe para ser usada em vários locais.


// Namespace foi criado como uma forma de conseguir encapsular classes constantes funcoes dentro de um grupo p q consiga eventualmente usar classes com o mesmo nome dentro da mesma aplicacao
//utilizamos muito namespace para divisao pastas
// require 'classe1.php';
// require 'classe2.php';

// $a = new classe1\MinhaClasse();
// echo $a->testar();

require 'Namespace_Classes/matematica/basico.php';

//para usar somente new Basico tenho q dizer p php q Basico de refere a Namespace_Classes\matematica\Basico

//asssim
//use Namespace_Classes\matematica\Basico as Basico;
//ou assim n precisa colocar as Basico
use Namespace_Classes\matematica\Basico;
$basico = new Basico();

// //ou assim 
// use Namespace_Classes\matematica\Basico as MatematicaBasico;
// $basico = new MatematicaBasico();



//$basico = new Namespace_Classes\matematica\Basico();
//pra eu fazer usao dos outros arquivos base eu instanciar