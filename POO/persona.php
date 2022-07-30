<?php
class Persona{
    public $nombre=array();
    public $apellido=array();

    public function guardar($nombre,$apellido){
        $this->nombre[]=$nombre;
        $this->apellido[]=$apellido ;

    }
    public function mostrar(){
        for ($i=0; $i < count($this->nombre) ; $i++) { 
            $this->imprimir($this->nombre[$i],$this->apellido[$i]);
            //echo $this->nombre[$i],$this->apellido[$i];
        }
    }
    public function imprimir($nombre,$apellido){
        echo "Tu nombre es ".$nombre." Tu apellido es ".$apellido."</br>";
    }
    public function contador(){
        echo count($this->nombre) ;
    }
    public function array(){
        print_r($this->nombre);
    }

    public function array2(){
print_r($this->nombre);
 
    }
}
$persona= new Persona();


$persona->guardar("Ezequiel","Tun");
$persona->guardar("Daniel","Tun");

//$persona->contador();
//$persona->array();
$persona->array2();


//$persona->mostrar();

?>