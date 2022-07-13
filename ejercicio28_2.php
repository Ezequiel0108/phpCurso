<?php
/*session_start();
$destruir=session_destroy();
if($destruir){
    echo "session cerrada";

}*/

session_start();
$destruir=session_destroy();

if ($_POST) {

    $boton=$_POST['destruir'];

    switch ($boton) {
        case 'Cerrar sesion':
            $destruir;
            
            echo "sesión cerrada";
            
            
            
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
    <form action="ejercicio28_2.php" method="post">

    <input type="submit" name="destruir" value="Cerrar sesion">
 


    </form>
</body>
</html>


