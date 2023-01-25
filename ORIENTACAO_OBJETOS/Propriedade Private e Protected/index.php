<?php
//private so pode ser alterada pela classe q a crio, mesmo q vc herde de outra classe
//protected pode ser usada p outra claase so n pode ser usada fora 

//Das alternativas a seguir, qual principal característica de uma propriedade protected ?
//Propriedade, na qual a classe e suas herdeiras podem acessar seu conteúdo.
class Post{
    protected int $id;
    private int $likes = 0;

    protected function setId($id) {
        $this->id = $id;
    }
    protected function getId() {
        return $this->id;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }

    protected function getLikes() {
        return $this->likes;
    }
}

class Foto extends Post{
    private $url;

    public function __construct($id){
        $this->setId($id); 
    }

    public function setUrl($url){
        return $this->url;
    }

    public function getUrl(){
        return $this->url;
    }
}

class Texto extends Post{
    private $body;

}


$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl('abc');

echo "FOTO: " . $foto->getId()." - ".$foto->getLikes()." likes - ".$foto->getUrl();