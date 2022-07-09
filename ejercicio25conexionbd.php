<?php
if ($_POST) {
    $nombre=$_POST['nombre'];
    $foto=$_POST['foto'];
    $id=$_POST['id'];
    # code...
}

if ($_POST) {
    # code...
$servidor="localhost";//la direccion de esta es 127.0.0.1
$usuario="root";
$contrasenia="";
try{
$conexion=new PDO("mysql:host=$servidor;dbname=album",$usuario,$contrasenia);
$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, '$nombre', '$foto');";//Aquí inserto datos pero le paso las variables que mandó el usuario
$conexion->exec($sql);
$borrar="DELETE FROM `fotos` WHERE `fotos`.`id` = $id";//este es para borrar datos con la id que pase el usuario
$conexion->exec($borrar);

echo "Conexión establecida";

}catch(PDOException $error){
    echo "Conexión erronea".$error;
}


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
<form action="ejercicio25conexionbd.php" method="post">
nombre
<input   type="text" name="nombre" id="">
foto
<input type="text" name="foto" id="">
borrar
<input type="text" name="id" id="">


<input type="submit" value="enviar">
</form>   
</body>
</html>