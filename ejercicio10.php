<?php
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if($valorA > $valorB){

        echo "El valor A es mayor que B";
    }

    if($valorA==$valorB){

        echo "los valores son iguales";
        if ($valorA==4) {
            echo "Tu valors de A es 4";
            # code...
        }
        if ($valorB==4) 
        {
            echo "Tu valor de b es 4";
            # code...
        }
    }else{
        echo "No hay ninguna condición en la que caiga";
    }

    

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>if anidados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <form action="ejercicio10.php" method="post">
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