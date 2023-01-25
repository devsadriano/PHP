<?php
//O que é a Orientação à Objetos ?
//orma de programação, a qual permite que os desenvolvedores façam tarefas agrupadas em classes.
//sistema q é feito de vários Objetos
//ex sistema estoques
//tem produtos e cada produto é um objeto
// cada objeto é um conjunto de coisas q tem naquele Objeto ex: uma mesa tem cor,tamanho ouseja tem atributos e funcoes q aquela mesa consegue fazer
//o objeto tem vida propria ele tem as proprias caracteristicas ele faz a sproprias acoes ele e minisistema dentro mundo dele enquanto objeto e esse objeto faz parte de um ambiente mais complexo formado por outros objetos
//ex facebook cada post é um objeto e dentro dele tem suas cosias

//De acordo com a orientação de objetos, como pode ser definido uma classe ?
//Modelo de código que pode conter um conjunto de objetos distintos, porém com a mesma finalidade.

//CLASSE E OBJETO
//CLASSE sao as propriedades do objeto
//ex adao e eva   --adao=objeto e eva classe

//ex facebook
//criando classe
class Post{
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLike(){
        $this->likes++;
    }
}

//criando objeto
$post1 = new Post();
// agora temos um objeto $post1
$post1->aumentarLike();

//$post1 -> likes = 3;
//definiindo as propriedades do objeto

$post2 = new Post();
$post2 -> likes = 10;

echo "POST 1: ".$post1->likes."<br/>";
echo "POST 2: ".$post2->likes."<br/>";
//assim consigo assessar essa propriedade


//propriedades
//são as caracteristicas q a classe vai ter e qdo objeto for criado tbm vai ter essas caracteristicas
//public ou seja é publica e podemos acessar   
//protected ou seja n é acessivel do lado de fora
//private ou seja n é acessivel do lado de fora

//o objeto tem caracteristicas q sao as propriedades e ele tbm pode executar cosias funcoes, tarefas dentro do proprio  objeto ou araves do proprio objeto
//vamos criar metodo pra aumentar qtde de likes
//agete mexe na classe e usa objeto sempre voltamos pra classe pq nela q arquitetamos tudo
//como cria metodo  public function
//como acesso as propriedades da classe atraves do this
//$this->likes++; this siginifica isto é uma coisa q esta propxima
// this está se referenciando ao proprio item em vez de colocar o objeto $post1 colocamos $this

// para executar um metodo e igual 
//$post1->aumentarLike();
//qdo fazemos isso alteramos like dentro de objeto post1

//classes tem basicamente dois itens q sao metodos funcoes ou propriedades ou os dois

//Marque a alternativa que define o conceito de propriedade pública.
//Propriedade pública pode ser manipulada por qualquer coisa que referencia o objeto.

//podmeos proteger as popriedades da classe pra ela so receber um determinado tipo de informacao atraves typed property int