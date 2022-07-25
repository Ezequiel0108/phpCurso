<?php
require("./Modelos/DatosPersonas.php");
require_once("./Modelos/Persona.php");

class GeneradorPersonas{
    private $personasGeneradas = [];

    public function GenerarPersonas($cantidad){
        $datosPersonas = new DatosPersonas();
        for($i=0;$i<$cantidad;$i++){
            $nombre = $this->ObtenerAleatorioDeArray($datosPersonas->nombres);
            $apellido = $this->ObtenerAleatorioDeArray($datosPersonas->apellidos);
            $edad = $this->ObtenerAleatorioDeArray($datosPersonas->edades);
            $p = new Persona($nombre,$apellido,$edad);

            array_push($this->personasGeneradas,$p);
        }
    }
    public function GenerarIngenieros($cantidad){
        $datosPersonas = new DatosPersonas();
        for($i=0;$i<$cantidad;$i++){
            $nombre = $this->ObtenerAleatorioDeArray($datosPersonas->nombres);
            $apellido = $this->ObtenerAleatorioDeArray($datosPersonas->apellidos);
            $edad = $this->ObtenerAleatorioDeArray($datosPersonas->edades);
            $lenguaje = $this->ObtenerAleatorioDeArray($datosPersonas->lenguajes);
            $ing = new Ingeniero($nombre,$apellido,$edad,$lenguaje);
            
            array_push($this->personasGeneradas,$ing);
        }
    }
    public function ObtenerAleatorioDeArray($array){
        return $array[array_rand($array)];
    }
    public function getPersonasGeneradas(){
        return $this->personasGeneradas;
    }
}
