<?php
session_start();

$_SESSION["usuario"]="Ezequiel";
$_SESSION["estatuas"]="logueados";

echo "Sesión iniciada".":</br>";
echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];



?>