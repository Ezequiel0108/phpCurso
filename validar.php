<?php

$nombre="";
$imprimir;
isset($nombre) ? (empty($nombre)?$imprimir="vacio":$imprimir=$nombre): $imprimir= "no existe";
//si existe y nombre esta vacía entonces imprime vacio de lo contrario imprime nombre y si nada de esto cumple entonces no existe 
echo $imprimir;
