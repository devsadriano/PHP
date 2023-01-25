<?php

//jeito certo
class Informacoes{
    private string $nome;
    private string $pais;
    private string $cidade;

    public function setNome($n){
        if (strlen($n) >= 3) {
            $this->nome = ucfirst($n);
        }
    }

    public function setPais($p){
        if (strlen($p) >= 3) {
            $this->pais = ucfirst($p);
        }
    }

    public function setCidade($c){
        if (strlen($c) >= 3) {
            $this->cidade = ucfirst($c);
        }
    }

    public function getNome(){
        return $this->nome ?? 'Visitante';
    }

    public function getPais(){
        return $this->pais ?? 'Indefinido';
    }

    public function getCidade(){
        return $this->cidade ?? 'Indefinido';
    }
}

$post1 = new Informacoes();
$post1->setNome('bonieky');
$post1->setPais('bolivia');
$post1->setCidade('Pedro Juan');

echo "Nome: ".$post1->getNome()."<br/>";
echo "Pais: ".$post1->getPais()."<br/>";
echo "Cidade: ".$post1->getCidade()."<br/>";