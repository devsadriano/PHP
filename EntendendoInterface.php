<?php
//serve p criar controle de qualidade
//interface é um guia de implemmentacao de uma classe
//qdo eu crio uma classe estou criando uma coisa abstrata, estou criano so um modelo pra poder ser usado qdo instancias um objeto
// a interface é um nivel acima ou seja é o "abstrato do abstrato"
//interace so tem um uso especifico 

//ex
//estmaos fzdo gerenciamento BD de uma empresa


//interace n e uma classe é um guia p poder implementar as minhas classes
interface Database{
    //eu n vou criar funcao so digo q existo
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MysqlDB implements Database{
    
    public function listarProdutos(){

    }

    public function adicionarProduto(){
        echo "Adicionando com Mysql";
    }

    public function alterarProduto(){

    }
    
    
    //leitura
    //escrita
    //alteracao
    //remocao
}

//agora queremos trocar de BD p Oracle
class OracleDB implements Database{
    
    public function listarProdutos(){

    }

    public function adicionarProduto(){
        echo "Adicionando com Oracle";
    }

    public function alterarProduto(){
    }
}

$db = new OracleDB();
$db->adicionarProduto();