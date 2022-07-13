<?php


$imprimir;
isset($nombre) ? (empty($nombre)?$imprimir="vacio":$imprimir=$nombre): $imprimir= "no existe";
echo $imprimir;
