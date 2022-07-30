<?php
if ($_POST) {
    # code...

$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];

$nombreMayuscula= strtoupper($nombre);
$ApellidoMinuscula= strtolower($apellido);

echo "Tu nombre es: ".$nombreMayuscula."</br>";
echo "Tu apellido en minuscula es : ".$ApellidoMinuscula;

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ejercicio16.php" method="post">
Nombre:
<input type="text" name="Nombre">

</br>
Apellido:
<input type="text" name="Apellido">

<input type="submit" value="Enviar">
</form>
    
</body>
</html>