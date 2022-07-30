<?php
class Usuario{
    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre, $edad, $pais){
        $this->nombre=$nombre;//el objeto tiene una propiedad llamada nombre "$this"
        $this->edad=$edad;
        $this->pais=$pais;
    }
public function Imprimir(){
    echo "Este es tu nombre: ".$this->nombre." Esta es tu edad: ".$this->edad." Y este es tu pais: ".$this->pais ;
}

}
$usuario= new Usuario("Ezequiel", 22, "Mexico");
$usuario->Imprimir();


