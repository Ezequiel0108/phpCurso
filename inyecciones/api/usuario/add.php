<?php
require_once("db/conexion.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$usuario = file_get_contents('php://input');
$usuario = json_decode($usuario);

$cadena = $usuario->nombre.$usuario->apellido;
$token = md5($cadena);

$sentencia = $con->prepare("insert into usuarios(nombre, apellido,correo,contra,token)values(?,?,?,?)");
$sentencia->bind_param("ssss",$usuario->nombre,$usuario->apellido,$usuario->correo,$token);
$sentencia->execute();
print(json_encode(["token"=>$token]));