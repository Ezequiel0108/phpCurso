<?php
//public puede ser accedido desde cualquier parte
// private puedes acceder solo desde otro metodo de la misma clase 
//Es decir; desde la instancia no podemos acceder
//no puedes ser accedidos desde la instancia igual.
//el protected permite usar sus metodos o atributos
    //atravez de otras clases que heredan sus metodos por otro lado el private solo permite
    //usar sus metodos en la misma clase
class Facebook{
public $nombre;
public $edad;
private $password;

public function __construct($nombre,$edad,$password){
    $this->nombre=$nombre;
    $this->edad=$edad;
    $this->password=$password;

}
public function Print(){
    echo "Tu nombre es: ".$this->nombre."</br>";
    echo "Tu edad es: ".$this->edad."</br>";
   $this->cambiarpass("6789");//el private solo puede ser llamados desde otros objetos dentro de la clase
    echo "Tu Password es: ".$this->password."</br>";
}
private function cambiarpass($password){
    $this->password=$password;
}

}
$facebook= new Facebook("Ezequiel",22,"1234");
$facebook->Print();



?>