<?php
class Persona
{
    public $nombre;
    private $apellido;
    protected $edad;

    function __construct($nombre,$apellido,$edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function setApellido($apellido){
        $this->apellido = $apellido;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getFullName(){
        return $this->nombre." ".$this->apellido;
    }

    public function saludar(){
        return "Hola me llamo ".$this->getFullName();
    }
}