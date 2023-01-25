<?php
// Autoload é um processo q faz no codigo de forma q o PHP consiga identificar qual é a classe q vc ta chamando e vc n precise dar um require 'classes/matematica.php'; em todas as classes q for utilizar
//entao criamos um procedimento q vai fazer esse processo..

//require 'classses/matematica.php';
//toda vez q registrei spl_autoload_register sempre q uma classe for instanciada $m = new Matematica(); automaticamente caso esse cara a classe  Matematica() n exista ainda  esse nome Matematica() vai ser enviado p a funcao 

// require 'autoload.php';

// $m = new Matematica();
// echo $m->somar(10, 20);

// $x = new Algo();