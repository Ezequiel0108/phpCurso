<?php include "cabecera.php";?>
<?php include("conexion.php");
$objconexion= new conexion();
$proyectos=$objconexion->consultar('SELECT * FROM `proyectos`');

$fechaa=date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="p-5 bg-light">
        <div class="container">
            <h1 class="display-3">Este es el portafolio</h1>
            <p class="lead">Creado por Ezequiel</p>
            <hr class="my-2">
          
            <p class="lead">
                <a class="btn btn-primary btn-md" href="Jumbo action link" role="button">Más info.</a>
            </p>
        </div>
    </div>
    <?php foreach($proyectos as $proyecto){?>
        
        
    
    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img  width="100" src=" imagenes/<?php echo $proyecto['imagen'];  ?>" alt="" class="img-fluid rounded-start" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php  echo $proyecto['nombre']?></h5>
        <p class="card-text"><?php   echo $proyecto['descripcion']?></p>
        <p class="card-text"><small class="text-muted"><?php  echo $fechaa; ?></small></p>
      </div>
    </div>
  </div>
</div>
<?php }?>

</body>
</html>

<?php include "pie.php";?>