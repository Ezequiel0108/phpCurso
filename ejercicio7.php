<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;

    echo "Tu resultado es ".$suma;


}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Operadores aritmeticos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="ejercicio7.php" method="post">
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