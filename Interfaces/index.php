<?php
//Sin interfeces
class Programador{
    function Programar(){
        echo "programando en php";
    }
}
class Doctor{
    function AtenderPaciente(){
        echo "atendiendo paciente";
    }
}

function Ejecutar($lista){
    foreach($lista as $item){
        if($item instanceof Doctor){
            $item->atenderPaciente();
        }else if($item instanceof Programador){
            $item->Programar();
        }
        echo " | ";
      }
}
$lista = [new Programador(),new Doctor()];
Ejecutar($lista);

//Con interface
interface Accion{
    function Ejecutar();
}
class Programador1 implements Accion{
    function Ejecutar(){
        echo "programando en php";
    }
}
class Doctor1 implements Accion{
    function Ejecutar(){
        echo "atendiendo paciente";
    }
}

function Ejecutar1($lista){
    foreach($lista as $item){
        $item->Ejecutar();
        echo " | ";
      }
}
$lista = [new Programador1(),new Doctor1()];
Ejecutar1($lista);