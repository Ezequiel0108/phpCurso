<?php
require_once("db/conexion.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$idUs = $_GET['idUs'];

$sentencia = $con->prepare("delete from usuarios where idUs = ?");
$sentencia->bind_param("i",$idUs);
$sentencia->execute();
print(json_encode("Eliminado"));