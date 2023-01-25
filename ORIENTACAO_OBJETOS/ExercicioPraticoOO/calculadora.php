<?php
class Calculadora{
    public $total = 0;
    
    public function add($x){
        $this->total += $x;
    }
    public function sub($x){
        $this->total -= $x;
    }
    public function multiply($x){
        $this->total *= $x;
    }
    public function divide($x){
        $this->total /= $x;
    }

    public function showTotal(){
        return $this->total;
    }

    public function clear(){
        echo '';
    }
}




