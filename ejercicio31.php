<?php
$jsonContenido='[  
{"nombre":"Ezequiel","apellido":"Tun"},
{"nombre":"Alvaro","apellido":"Kú"}
]';
$resultado= json_decode($jsonContenido);
//print_r($resultado);

foreach ($resultado as $persona){

echo "Tu nombre es ".$persona->nombre."</br>"."Tu apellido es ".$persona->apellido."</br>";
}

?>