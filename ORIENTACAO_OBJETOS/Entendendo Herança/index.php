<?php
//O que é Herança no PHP ?
//Mecanismo no qual permite a criação de uma nova classe com base em uma já existente.
class Post{
    private int $id;
    private int $likes = 0;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }

    public function getLikes() {
        return $this->likes;
    }
}

//dentro da class Foto vamos usar tudo da class Post vai herdar
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