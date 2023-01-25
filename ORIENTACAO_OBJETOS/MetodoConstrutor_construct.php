<?php
//O que é o Método Construtor em uma classe ?
//Função na qual é executada sempre que um novo objeto é criado.

//métodos pre definidos pra rodar automaticamente um deles é o construtor
// __contruct() ele é executado toda vez q crio um objeto novo
// ou seja toda vez q rodar nesse momento $post1 = new Post(); //$post2 = new Post(); será executado o __construct
// p q serve __construct() semrpe q precisar executar no momento em q o objeto for criado  se esa ele
//um deles é p definir as propriedades iniciais do objeto
//entao eu ja crio um objeto c informaçoes nele corretas sem precisar criar objeto depois colocar atributos ela
// e para isso utilizamos parametros

class Postt{
    public int $id;
    public $likes = 0;
    public $comments = [];
    public $author;

    // //$qtLikes = 0 fzdo isso defino parametro opcional
    // public function __construct($qtLikes = 0){
    //     $this->likes = $qtLikes;
    // }

    //outro exemplo
    public function __construct($postId){
        $this->id = $postId;
        //consultar BD p pegar info do POST $id
        $this->likes = 12;
    }
    


    public function aumentarLike(){
        echo 'abc';
        $this->likes++;
    }
}

$post1 = new Postt( 25 );
$post2 = new Postt( 2 );

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";
