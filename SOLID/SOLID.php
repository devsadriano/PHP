<?php
//jeito errado
// class Usuario{

//     public function setNome(){}
//     public function getNome(){}

//     public function add(){}
//     public function update(){}
//     public function delete(){}
// }


//jeito certo
class Usuario{

    public function setNome(){}
    public function getNome(){}
}

class UsuarioDb{

    public function add(Usuario $u){}
    public function update(Usuario $u){}
    public function delete($id){}

}
