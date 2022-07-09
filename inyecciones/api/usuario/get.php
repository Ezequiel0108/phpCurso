<?php
require_once("db/conexion.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$idUs = $_GET['idUs'];

$sentencia = $con->prepare("select*from usuarios where idUs = ?");
$sentencia->bind_param("i",$idUs);
$sentencia->execute();
$result = $sentencia->get_result();

$row = $result->fetch_assoc();
print(json_encode($row));
//$archivo = fopen('archivo.txt','a');  
//fputs($archivo,json_encode($rows)); 