<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if(($valorA > $valorB) &&  ($valorA != $valorB)){

        echo "El valor A es mayor que B y son diferentes";
    }

    

}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>comparacion de dos </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="ejercicio9.php" method="post">
        Valor A:
    <input class="form-control" type="text" name="valorA">
</br>
    Valor B:
    <input class="form-control" type="text" name="valorB">
</br>
    <input type="submit" value="Calcular">


    </form>


    
    </body>
</html>