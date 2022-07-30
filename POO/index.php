<?php
class Persona{
public $nombre= "Ezequiel";

public function hablar($mensaje){
echo $mensaje;
}

}
$persona= new Persona();
echo $persona->nombre;
$persona->hablar("Hola");

?>