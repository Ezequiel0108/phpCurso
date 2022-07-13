<?php

$nombre="";
$ejradio="";
if($_POST){
//lo que sigue es un if alternario 
/*  si hay información en este txt  despues del signo es 
entonces asignaselo despues de los dos puntos, de lo contrario va a estar
vacío */

    $nombre= ($_POST['nombre'])?$_POST['nombre']:"imprime esto porque lo envie vacio";
    $ejradio= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";


    

}

//Aqui es lo mismo pero con if normal
/*
$nombre="";
$ejradio="";
if($_POST){
$nombre=$_POST['nombre'];
$ejradio=$_POST['lenguaje'];


}else{
    $nombre="vacio";
    $ejradio="vacio";
    

}
*/



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
    <?php if($_POST){ ?> <!-- Abri un php para iniciar  el if
        de si existe info entonces muestro el "hola y si no, no lo muestro-->
   
        <b>Hola: </b><?php   echo$nombre; ?>
        </br>
        <b> Tu lenguajes es:</b> <?php echo $ejradio;?>
    <?php }?> <!-- aqui cerre ese if-->



<form method="post" action="ejercicio29.php">
    <!--con el value es el valor que se asigna por default-->
Nombre:</br>
    <input value="<?php echo $nombre; ?>"type="text" name="nombre" value="">
    </br>
<!-- el checked es solo para devolver el valor seleccionado -->
    ¿Te gusta?: </br>
    </br>php: <input <?php  echo ($ejradio=="php")?"checked":"ww"; ?> value="php" type="radio" name="lenguaje" id="">
    </br>html:<input <?php  echo ($ejradio=="html")?"checked":""; ?>  value="html" type="radio" name="lenguaje" id="">
    </br>css:<input <?php  echo ($ejradio=="css")?"checked":""; ?>  value="css" type="radio" name="lenguaje" id="">
    </br>
<input type="submit" value="Enviar info">


</form>
    
</body>
</html>
