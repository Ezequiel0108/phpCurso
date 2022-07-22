<?php
class Printer{

    public static function MostrarTitulo($titulo){
        Printer::DibujarLinea(strlen($titulo)+2,"=");
        Printer::MostrarTexto("\n $titulo\n");
        Printer::DibujarLinea(strlen($titulo)+2,"=");
        Printer::MostrarTexto("\n");
    }
    public static function MostrarTexto($texto){
        echo $texto;
    }
    public static function DibujarLinea($tamanio,$caracter){
        echo str_repeat($caracter,$tamanio);
    }
}