<?php
//psr4 ela demanda q toda classe ela pertenca a um namespace e o namespace tem q seguir padrao de autoload
//toda classe tem q ter namespace
//nesse exemplo estou definindo q todos arquivos vao ficar dentro pasta classes 

// require 'vendor/autoload.php';

// use \classess\matematica\Basica;

// //use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

// $m = new Basica();
// // $m = new \classess\matematica\Basica();
// echo $m->somar(10, 20);

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');

// // $e = new foto\Upload();
// // echo $e->somar(10, 20);
