<?php

//el archivo
$archivo="contenido.txt";
//abrimos el archivo modo rectura
$archivoabierto=fopen($archivo,"r");
//leemos el contenido, y le asignas el peso
$contenido=fread($archivoabierto,filesize($archivo));
echo $contenido;

?>