<?php
//O que se pode definir sobre encapsulamento no PHP?
//Conceito que protege uma classe e suas propriedades de qualquer modificação externa no sistema.


//conceito encapsular uma classe é proteger as propriedades de acessos externos 
//e mesma coisa qdo falo q vou criar o set  e get de alguma coisa
//entao sempre colcocamos a funcao set e get
//private string $author; e colocamos private pra ele funcionar so dentro da classe q quero
//entao a unica forma q tenho q alterar a variavel $author e atraves do setAuthor()  e o q ele vai fazer as devidas verificações no caso colocar primeira letra maiuscula ou nome dele tem q ter mais q 2 caracteres if (strlen($n) >= 3)

//jeito errado
// class Postt{
//     public int $id;
//     public $likes = 0;
//     public $comments = [];
//     public $author;

//     public function aumentarLike(){
//         $this->likes++;
//     }
// }
// $post1 = new Post();
// $post1->author = 'Bonieky';
// $post2 = new Post();
// $post2->author = 'Fulano';
//echo "POST 1: ".$post1->likes."<br/>".$post1->author."<br/>";
//echo "POST 2: ".$post2->likes."<br/>".$post2->author."<br/>";


//jeito certo
class PostEncapsular{
    public int $id;
    public $likes = 0;
    public $comments = [];
    private string $author;

    public function aumentarLike(){
        $this->likes++;
    }
    
    public function setAuthor($n){
        if (strlen($n) >= 3) {
            $this->author = ucfirst($n);
        }
    }

    public function getAuthor(){
        return $this->author ?? 'Visitante';
    }
}

$post1 = new PostEncapsular();
$post1->setAuthor('bonieky');

$post2 = new PostEncapsular();
$post2->setAuthor('Fulano');

echo "POST 1: ".$post1->likes."<br/>".$post1->getAuthor()."<br/>";
echo "POST 2: ".$post2->likes."<br/>".$post2->getAuthor()."<br/>";
