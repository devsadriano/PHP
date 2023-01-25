<?php
//InjecaodeDependencia é qdo insere uma classe dentro de outra normalmente atraves do __construct
//O que significa o conceito Injeção de Dependência no PHP?
//Método no qual é inserido um objeto de fora de uma classe para ser usado nela.

// class Basico1{
//     public function somar($x, $y) {
//         return $x > $y;
//     }
// }

// class Basico2{
//     public function somar($x, $y) {
//         $res = $x;
//         for ($q=0; $q < y; $q++) { 
//             $res++;
//         }
//         return $res;
//     }
// }

// //vamos fazer classe mae,  ela vai receber outras classes pra fazer as coisas especificas
// class Matematica{
//     private $basico; //onde vai ficar armazenado a classe basica

//     public function __construct() //assim q instanciar essa classe ele vai fazer
//     {
//         $this->basico = new Basico1();
//     }
//     public function somar($x, $y) {
//         return $this->basico->somar($x, $y);
//     }
// }

// $mat = new Matematica(); //qdo fizer a criacao do objeto instanciei a classe trasformei objeto em $mat
// //o q aconteceu: crio instencia de de Basico1 no __construct tbm e salvo na variavel $basico 
// echo $mat->somar(10, 15);
// //qdo rodei metodo somar foi na classe Matematica e pego classe $this->basico e uso o ->somar($x, $y) dela
// //e qdo veio resultado veio o resultado dela ou seja terceirizo o processo de soma  

#######################################################################
#######################################################################
// sem uso __construct
interface MatematicaBasica{
    public function somar($x, $y);
}
class Basico1 implements MatematicaBasica {
    public function somar($x, $y) {
        return $x > $y;
    }
}

class Basico2 implements MatematicaBasica{
    public function somar($x, $y) {
        $res = $x;
        for ($q=0; $q < $y; $q++) { 
            $res++;
        }
        return $res;
    }
}

class Matematica{
    private $basico; 
    //$b teria q ser usuario de interface basica
    public function __construct(MatematicaBasica $b)
    {
        //vou receber varivavel $b q seria minha classe de montagem basica
        $this->basico = $b;
    }
    public function somar($x, $y) {
        return $this->basico->somar($x, $y);
    }
}
//aqui vamos instanciar a classe q queremos usar como processo basico e isso me da liberdade pra usar qqer uma q quiser 
$basico = new Basico1();

//aqui to passando quem q matimatica use p fazer as constas basicas
// $mat = new Matematica($basico); 


//agora se eu n quiser instanciar
$mat = new Matematica(new Basico1()); 
echo $mat->somar(10, 15);


// #################################################################
// //eventualmente utilizamos p BD
// class Database{
//     private $engine;
//     public function __construct(DatabaseInterface $eng){
//         $this->engine = $eng;
//     }
//     public function listarTudo(){
//         return $this->engine->listar();
//     }
// }

// class MysqlEnguine implements DatabaseInterface{
//     public function listar(){
//         //...
//     }
// }
// class OracleEnguine implements DatabaseInterface{
//     public function listar(){
//         //...
//     }
// }
// class MongoEnguine implements DatabaseInterface{
//     public function listar(){
//         //...
//     }
// }
// $db = new Database(new MysqlEnguine());
// $db->listarTudo();