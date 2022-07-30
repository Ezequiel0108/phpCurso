<?php
class Vehiculo{
public $motor= false;
public $marca;
public $color;
 protected function estado(){
    if ($this->motor){//si el motor esta en "true" entonces:
        echo "el motor esta encendido</br>";
    }else {
        echo "el motor esta apagado</br>";
    }
}
public function encender(){
    if ($this->motor){//si el motor esta en "true"
        echo "el motor ya esta encendido";
    }else{ 
        $this->motor=true;
        echo "el motor ahora esta encendido";

    }
}

}
class Moto extends Vehiculo {
public function estadoMoto(){
    $this->estado();//el protected permite usar sus metodos o atributos
    //atravez de otras clases que heredan sus metodos por otro lado el private solo permite
    //usar sus metodos en la misma clase
}

}
class Cuatrimoto extends Moto{//Este hereda todos los metodos de los pasados

}
$vehiculo=  new Cuatrimoto();
$vehiculo->estadoMoto();
$vehiculo->encender();
$vehiculo->estado();//este no funcionará ya que es protected


?>