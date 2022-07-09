<?php

class persona{
    public $nombre;//propiedades atributos
    public $edad;
    protected $altura;

    public function asignarNombre(){//acciones o metodos
        $this->nombre="eze";
       
    }

    public function mostrarEdad(){
        $this->edad=20;
      
    
    }
}
//aqui le estan heredando las propiedades a trabajador
class trabajador extends persona{
    public $puesto;

    public function puesto ($Nuevopuesto){
 
    $this->puesto=$Nuevopuesto;

}
//Aqui imprimo todas las propiedades de las clases o lo que guardan sus atributos
public function mostrarTodosDatos(){
echo "Tu nombre es ".$this->nombre." Tu edad es ".$this->edad." Y tienes el puesto ".$this->puesto;

}
}
$objtrabajador= new trabajador("");//instancia o creacion de objeto a partir de una clase heredada
$objtrabajador->puesto("Programador");//llamando metodo y asignandole valor
$objtrabajador->asignarNombre();
$objtrabajador->mostrarEdad();
$objtrabajador->mostrarTodosDatos();//este muestra todos sus datos


?>


