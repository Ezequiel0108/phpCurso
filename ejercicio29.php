<?php
$nombre="";
$ejradio="";
$php="";
$html="";
$css="";
$pelicula="";
$duda="";
if($_POST){
//lo que sigue es un if alternario 
/*  si hay información en este txt  despues del signo es 
entonces asignaselo despues de los dos puntos, de lo contrario va a estar
vacío */

    $nombre= isset(($_POST['nombre']))?$_POST['nombre']:"";
    $ejradio= (isset($_POST['lenguaje']))?$_POST['lenguaje']:"";
    $php=(isset($_POST['php'])=="si")?"checked":"";
    $html=(isset($_POST['html'])=="si")?"checked":"";
    $css= (isset($_POST['css'])=="si")?"checked":"";
    $duda=(isset($_POST['duda']))?$_POST['duda']:"";
    $pelicula=(isset($_POST['pelicula']))?$_POST['pelicula']:"";
    //intrucción de insertar recepciono los valores
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
    <?php if($_POST){ ?> <!-- Abri un php para iniciar  el if
        de si existe info entonces muestro el "hola y si no, no lo muestro-->
   
        <b>Hola: </b><?php   echo$nombre; ?>
        </br> 
        El lenguaje que te gusta es:</br>
    
    <?php echo $ejradio;?>

    </br>
    El/los lenguajes que estas aprendiendo más son:</br>
    <?php
         echo (isset($_POST['php'])=="checked")?"PHP":"";?></br>
   <?php echo (isset($_POST['html'])=="checked")?"html":"";?></br>
   <?php echo (isset($_POST['css'])=="checked")?"css":"";?></br>
   La pelicula que te gusta es:</br>
<?php   echo $pelicula?> </br>
<b>Tu duda es la siguiente:</b><?php echo $duda; ?>
    <?php }?> <!-- aqui cerre ese if-->
    




<form method="post" action="ejercicio29.php">
    <!--con el value es el valor que se asigna por default-->
    </br>
    Nombre:</br>
    <input value="<?php echo $nombre; ?>"type="text" name="nombre" >
    </br>
<!-- el checked es solo para devolver el valor seleccionado -->
    ¿Cual lenguaje te gusta?:</br>
    </br>php: <input <?php  echo ($ejradio=="php")?"checked":""; ?> value="php" type="radio" name="lenguaje" id="">
    </br>html:<input <?php  echo ($ejradio=="html")?"checked":""; ?>  value="html" type="radio" name="lenguaje" id="">
    </br>css:<input <?php  echo ($ejradio=="css")?"checked":""; ?>  value="css" type="radio" name="lenguaje" id="">
    
    </br>
    ¿Cual estás aprendiendo más?:</br>
    php:<input type="checkbox" <?php  echo $php; ?> name="php" value="si" id=""></br>
    html:<input type="checkbox"<?php  echo $html; ?> name="html" value="si" id=""></br>
    css:<input type="checkbox" <?php  echo $css; ?> name="css" value="si" id=""></br>
    </br>
    ¿Que pelicula te gusta más?</br>
    <select name="pelicula" id="">
        <option value="">[Ninguna]</option>
        <option value="pel1" <?php echo ($pelicula=="pel1")?"selected":"";  ?>> pel1</option>
        <option value="pel2" <?php echo ($pelicula=="pel2")?"selected":"";?>> pel2</option>
  
    </select></br>
    </br>
    comparte tus opiniones:</br>
    <textarea name="duda" value=""   rows="10" cols="10">

    <?php  echo (isset ($_POST['duda']))?$duda:""; ?>
    </textarea></br>

    <input type="submit" value="Enviar info">


</form>
    
</body>
</html>