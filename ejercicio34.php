<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//El include aunque tenga error sigue corriendo lo que le sigue
include 'ejercicio34_1.php'; echo"</br>";
//include_once hace que solo detecte 1 archivo extraido
//El require cuando tiene error para el codigo ya no sigue corriendo
require ('ejercicio34_1.php');
?>
    
</body>
</html>


