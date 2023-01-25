<?php
//psr4 ela demanda q toda classe ela pertenca a um namespace e o namespace tem q seguir padrao de autoload
//toda classe tem q ter namespace
//nesse exemplo estou definindo q todos arquivos vao ficar dentro pasta classes 

require 'vendor/autoload.php';

$m = new \classess\matematica\Basica();
echo $m->somar(10, 20);

// $e = new foto\Upload();
// echo $e->somar(10, 20);
