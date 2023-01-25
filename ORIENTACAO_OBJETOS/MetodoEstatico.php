<?php
// metodo q vou fazer dentro de uma classe "ele e independente" ou seja ele pode ser usado unicamente ou seja externamente
// class Matematica{
//     public static function somar($x, $y){
//         return $x + $y;
//     }
// }

// $m = new Matematica();
// echo $m->somar(10, 20);

//agora vamos criar metodo estatico ou seja n vou precisar criar objeto pra depois utilizar a fucao somar 
//so precisamos referencias a classe a qual essa funcao faz parte
//posso fazer mesca coisa c a propriedade 
//assim posso acessar $nome variavel q esta dentro da classe sem precisar rasformar em objeto
class Matematica{
        public static string $nome = 'Bonieky';

        public static function somar($x, $y){
            return $x + $y;
        }
    }
    
echo Matematica::somar(10, 20);
echo Matematica::$nome;