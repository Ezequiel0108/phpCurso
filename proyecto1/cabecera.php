<?php
session_start();
if(($_SESSION['usuario'])!="Jesus"){
  header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto 1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
</head>
<body>
<nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo left col s12 s6">Proyecto 1</a>
      <ul id="nav-mobile" class="right col s6 m6">
        <li><a href="indexx.php">Index</a></li>
        <li><a href="portafolio.php">Portafolio</a></li>
        <li><a href="cerrar.php">Cerrar</a></li>
       
       
      </ul>
    </div>
    
  </nav>
</body>
</html>