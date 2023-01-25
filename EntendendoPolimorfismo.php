<?php
//O paradigma POO traz um conceito importantíssimo para o desenvolvimento de classes. Esse conceito se chama POLIMORFISMO que significa:
//Um grupo de classes deve ter métodos de mesma identificação.


// vamos supor q temos um arrray e nesse array temos varios objetos dentro desse array
// o polimorfismo  diz respeito a implementacao e n ao q ta na classe
//fiz foreach em objetos  peguei o item da vez do loop e roudei o metodo do getTipo() e depois rodei o metodo getArea() pq? pq tanto a classe quadrado qto circulo os dois tem os metodos getTipo() e getArea() isso é polimorfismo e poli varios e morfismo forma ou seja varias classes diferentes tem a mesma forma ou metodo pode pertencer a diferentes classes q eu n to nem ai pra quem pertence o importante e q ela tenha esse metodo pra eu utilizar
interface Forma{
    public function getTipo();
    public function getArea();
}

class Quadrado implements Forma{
    private $largura;
    private $altura;

    public function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getTipo(){
        return 'quadrado';
    }
    public function getArea(){
        return $this->largura * $this->altura;
    }
}

class Circulo implements Forma{
    private $raio;
    public function __construct($r){
        $this->raio = $r;
    }
    public function getTipo(){
        return 'circulo';
    }
    public function getArea(){
        return pi() * ($this->raio * $this->raio);
    }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];

//agora quero mostrar a area dessa galera
foreach ($objetos as $objeto) {
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "AREA ".$tipo." : ".$area()."<br>";
}