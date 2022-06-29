<?php
if ($_POST) {

    $boton=$_POST['valor'];

    switch ($boton) {
        case '1':
            # code...
            echo "Presionaste el botón 1";
            break;
        case '2':
                # code...
            echo "Presionaste el botón 2";
            break;   
           
        case '3':
                # code...
            echo "Presionaste el botón 3";
            break;       
        
      
    }
    # code...
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="ejercicio11.php" method="post">

    <input type="submit" name="valor" value="1">
    <input type="submit"  name="valor"value="2">
    <input type="submit"  name="valor"value="3">



    </form>
</body>
</html>