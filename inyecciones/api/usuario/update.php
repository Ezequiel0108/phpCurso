<?php
require_once("db/conexion.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$usuario = file_get_contents('php://input');
$usuario = json_decode($usuario);
$sentencia = $con->prepare("update usuarios set nombre  = ?, apellido = ?, correo = ? where idUs = ?");
$sentencia->bind_param("sssi",$usuario->nombre,$usuario->apellido,$usuario->correo,$usuario->idUs);
$sentencia->execute();
print(json_encode("Actualizado"));