<?php
//metodos estaticos

class Unaclase{
   
    public static function  unMetodo(){
        echo "método estático";
    }


}
$obj= new Unaclase();
$obj->unMetodo();

UnaClase::unMetodo();

?>