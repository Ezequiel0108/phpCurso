<?php
require_once("Persona.php");

class Ingeniero extends Persona{
    private $lenguaje;
    function __construct($nombre,$apellido,$edad,$lenguaje) {
        parent::__construct($nombre,$apellido,$edad);
        $this->lenguaje = $lenguaje;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function saludar(){
        return parent::saludar().", Programo en ".$this->lenguaje;
    }
}
