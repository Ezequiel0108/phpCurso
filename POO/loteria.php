<?php
class Loteria{
public $numero;
public $intentos;
public $resultado= false;

public function __construct($numero, $intentos){
$this->numero=$numero;
$this->intentos=$intentos;

}
public function sortear(){
$minimo= $this->numero/2 ;
$maximo= $this->numero*2;

for ($i=0; $i < $this->intentos ; $i++) { 
    $int= rand($minimo,$maximo);
    $this->intentos($int);
}

}
public function intentos($int){
if($int==$this->numero){
    echo $int."==".$this->numero."</br>";
    $this->resultado= true;
}else{
    echo $int."!=".$this->numero."</br>";
}
}
public function __destruct(){
if($this->resultado){
    echo "felicidades, has acertado en".$this->intentos." intentos";
}else{
    echo " has perdido en".$this->intentos." intentos";
}
}

}
$loteria= new Loteria(8,5);
$loteria->sortear();

?>