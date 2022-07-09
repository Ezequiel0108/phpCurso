<?php

class persona{
    public $nombre;//propiedades atributos
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){//acciones o metodos
        $this->nombre=$nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        echo "esta es mi edad".$this->edad;
    }
}




$objAlumno= new persona("");//instancia o creacion de objeto a partir de una clase
$objAlumno->asignarNombre("Ezequiel");//llamando metodo
$objAlumno->imprimirNombre();
$objAlumno->mostrarEdad();


?>
