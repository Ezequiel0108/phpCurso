<?php

    # code...


    # code...
$servidor="localhost";//la direccion de esta es 127.0.0.1
$usuario="root";
$contrasenia="";
try{
$conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


$sql= "SELECT * FROM `fotos`";//selecciona todos los campo de fotos
$sentencia=$conexion->prepare($sql);//preparo los datos
$sentencia->execute();//ejecuto los datos

$resultado=$sentencia->fetchAll();

print_r($resultado);
echo "</br>";
foreach ($resultado as $key ) {//recorre todos
   print_r($key);
    # code...
}
echo "</br>";
foreach ($resultado as $key ) {//recorre todos y te trae el nombre
    echo $key['nombre']."</br>";
     # code...
 }




echo "Conexión establecida";

}catch(PDOException $error){
    echo "Conexión erronea".$error;
}



?>