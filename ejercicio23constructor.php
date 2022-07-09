<?php

class persona{
    public $nombre;//propiedades atributos
    private $edad;
    protected $altura;

    function __construct($nuevoNombre){//indica que se inicializa con un argumento en la clase
        $this->nombre=$nuevoNombre;//puedo llamar al otro metodo y asignarle otro nombre
    }


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

$objAlumno= new persona("Ezequiel constructor");//instancia o creacion de objeto a partir de una clase
//$objAlumno->asignarNombre("Ezequiel");//llamando metodo
$objAlumno->asignarNombre("nuevo nombre ezequiel");
$objAlumno->imprimirNombre();

?>
