<?php 
if($_POST){
    print_r($_POST);
    echo "</br>";
//recibo el nommbre del input "archivo" y luego accedo al nombre
    print_r($_FILES['archivo']['name']);
//aqui moví el archivo a mi carpeta donde estan guardados estos archivos
    move_uploaded_file($_FILES['archivo']['tmp_name'],$_FILES['archivo']['name']);


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

<!-- el enctype es para lo del archivo-->
<form action="ejercicio30archivo.php" enctype="multipart/form-data" method="post">


<input type="file" name="archivo" value="">
</br>
<input type="submit" name="enviar" value="Enviar información">

</form>
    
</body>
</html>