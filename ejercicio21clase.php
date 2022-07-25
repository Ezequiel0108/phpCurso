<?php
//Esta clase me perimete crear un objeto persona
class persona{
    public $nombre;//propiedades atributos
     private $edad;//Hace que la variable/función solamente se pueda utilizar desde la misma clase que las define.
    protected $altura;//protected : Hace que la variable/función se puede acceder desde la clase que las define y también desde cualquier otra clase que herede de ella.

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




$objAlumno= new persona();//instancia o creacion de objeto a partir de una clase
$objAlumno->asignarNombre("Ezequiel");//llamando metodo

$objAlumno->imprimirNombre();


$objAlumno->mostrarEdad();
echo $objAlumno->edad=22;// aqui defino un nuevo valor para la edad, se puede ya que es publica
//si fuera private esto me marcaría error ya que no esta dentro de la clase, o un metodo



?>