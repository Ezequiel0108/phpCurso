<?php
$frutas=array("f"=>"fresa","p"=>"Platano","u"=>"uva");

print_r($frutas);
echo "</br>";
echo $frutas["p"]."</br>";

foreach ($frutas as $indice =>$valor) {

    echo "El indice ".$indice." Tiene como valor: ".$valor."</br>";
    # code...
}


?>