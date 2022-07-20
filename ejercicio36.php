<?php
$nombreArchivo="bootstrap.txt";
$contenidoArchivo="
bs5-$ Esto es para iniciar direccto con boostrap
";
$archivoAcrear=fopen($nombreArchivo,"w");


fwrite($archivoAcrear,$contenidoArchivo);
fclose($archivoAcrear);


?>