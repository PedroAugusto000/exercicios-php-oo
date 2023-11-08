<?php
class Adulto {

private $peso;

public function engordar($quilos){
    $this->peso += $quilos; 
}

public function emagrecer($quilos){
    $this->peso -= $quilos; 
}

public function setPeso($p){
    $this->peso = $p;
}

public function getPeso(){
    return $this->peso;
}
}
?>

