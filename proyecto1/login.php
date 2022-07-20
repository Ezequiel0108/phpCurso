<?php

session_start();

if($_POST){
  if( (($_POST['usuario'])=="Jesus") && (($_POST['contrasenia'])=="jesus12345") ){
    $_SESSION["usuario"]="Jesus";

   header("location:indexx.php");
    echo "sesion iniciada";
   
 
  }else{
    echo "<script> window.alert('El usuario o contraseña es incorrecto'); </script>";
  }
  
}



?>
<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
<div class="container">

    <form action="login.php" method="post">
    
         Usuario: </br><input class="form-control" type="text" name="usuario" id=""></br>

         contraseña: </br><input class="form-control"  type="password" name="contrasenia" id=""></br>
        
   
         <button class="btn btn-success" type="submit">Entrar al portafolio</button>
    
    </form>

</div>

  </body>
</html>