<?php
// require 'vendor/autoload.php';

// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

// // create a log channel
// $log = new Logger('name');
// $log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// // add records to the log
// $log->warning('Foo');
// $log->error('Bar');

//O que o Gerenciamento de Dependências permite ao desenvolvedor no PHP?
//Permite definir bibliotecas externas utilizadas em seu projeto de forma simples e direta.

//Introdução à Gerenciamento de Dependências
//o processo de geren dependencia consiste em reaproveitamento de codigo
//https://packagist.org/packages/intervention/image

//Instalando o Composer
// https://getcomposer.org/
// getstart
// https://getcomposer.org/doc/00-intro.md
// Installation - Windows
// Composer-Setup.exe. 
// depois abre prompt
// composer --version
//o composer ele funciona sempre baseado em um aqruivo central de configuracao q tem q ter no projeto
//composer.json
//no terminal rodar composer install
// ele n instalo ainda pq n tem nada arquivo composer.json
//mas ele gero o autoload do composer e crio pasta vendor
// e dentro de vendor crio autoload.php
//e acima chamamos ele require 'vendor/autoload.php';
//agora q puxei auttoload do composer agora posso utilizar as bibliotecas q eventualmente puxar aqui no index
//como puxo biblioteca
// exemplo puxar biblioteca  q faz um log 
// composer require monolog/monolog   
// monolog(empresa)/monolog(nome arquivo ou biblioteca)
// esse arquivo vem do site composer  em Browse Packages
// e deppois q baixar a biblioteca ela ficar dentro apsta vendor
// e dpois ele vai modificar o arquivo compsoer.json ele vai inserir la a referencia a essa biblioteca
// e depois vai gerar autoload novamente p q ele consiga baixar essa nova biblioteca
//agora consigo usar monolog dentro sistema 
//https://packagist.org/packages/monolog/monolog

//depois vou usar comando p regenerar o autoload
// composer dump-autoload
