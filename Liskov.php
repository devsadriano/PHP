<?php
//SOLID: L - Princípio da Substituição de Liskov
//Um dos princípios do SOLID é o princípio da substituição de Liskov. Certo desenvolvedor desenvolveu uma classe A e uma classe B. A classe B ele definiu como uma extensão de A. Mais tarde ele precisou criar uma classe C extendida de B. Todas as classes possuem métodos com mesmo nome. O que o desenvolvedor poderia usar para evitar redefinição de métodos?
//Injeção de Dependência.

// class A{
//     public function getNome(){
//         return "Meu nome e A";
//     }
// }

// function imprimeNome(A $obj){
//     return $obj->getNome();
// }

// $objeto1 = new A();
// echo imprimeNome($objeto1);

//usando principio
// se eu criar uma outra classe e extender A substituindo metodo q esteja em A um exemplo é o getNome() entao uma outra funcao ou uma outra classe q esteja recebendo a minha classe A ela tem q poder receber a classe B tbm 
class A{
    public function getNome(){
        return "Meu nome e A";
    }
}

class B extends A{
    public function getNome(){
        return "Meu nome e B";
    }
}

function imprimeNome(A $obj){
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo imprimeNome($objeto1)."<br>";
echo imprimeNome($objeto2);