<?php
//si existe datos en get...
/* el metodo get lo manda atravez de la url
y lo recibe en un documento php
*/
if ($_GET){
 $nombre=$_GET['nombre'];

 echo "Hola ".$nombre;


}


?>