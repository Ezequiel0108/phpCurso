<?php
session_start();
if($_SESSION){
echo "Usuario: ".$_SESSION["usuario"]." estatus: ".$_SESSION["estatus"];

}else{
    echo"La sesión se cerro";
}
?>