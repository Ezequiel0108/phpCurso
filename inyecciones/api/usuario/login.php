<?php
require_once("db/conexion.php");
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');

$usuario = file_get_contents('php://input');
$usuario = json_decode($usuario);

$sentencia = $con->prepare("select token from usuarios where correo = ? and contra = ?");

$sentencia->bind_param("ss",$usuario->email,$usuario->password);
$sentencia->execute();

$result = $sentencia->get_result();
$row = $result->fetch_assoc();
print(json_encode($row));