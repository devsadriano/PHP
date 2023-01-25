<?php
class Usuario{
    public $info = 0;
    
    public function nome($n){
        $this->info = $n;
    }
    public function pais($p){
        $this->info = $p;
    }
    public function cidade($c){
        $this->info *= $c;
    }

    public function showInfo(){
        return $this->info;
    }
}





