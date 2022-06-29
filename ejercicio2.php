<?php
//Recibe info del formulario html método post
//Si existe valor imprimelo 
if($_POST){
$nombre=$_POST['txtNombre'];
echo "Hola".$nombre;
}
//Si no hay valor del agrega esto
else{
    echo "Agrega Dato";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodo post</title>
</head>
<body>
<form action="ejercicio2.php" method="post">
    Nombre:
    <input type="text" name="txtNombre">
    <br>
    <input type="submit"value="Enviar">
</form>

    
</body>
</html>