<?php
require_once("db/conexion.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$sentencia = $con->prepare("select*from usuarios");
$sentencia->execute();
$result = $sentencia->get_result();
$rows;
while($row = $result->fetch_assoc()){
    $rows[] = $row; 
}
print(json_encode($rows));
//$archivo = fopen('archivo.txt','a');  
//fputs($archivo,json_encode($rows)); 