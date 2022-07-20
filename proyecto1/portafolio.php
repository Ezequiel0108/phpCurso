<?php include "cabecera.php";?></br>
<?php include("conexion.php");?>
<?php
if($_POST){

    $nombre= $_POST['nombre'];
    $descripcion= $_POST['descripcion'];
    $fecha= new DateTime();
//recibo el nommbre del input "archivo" y luego accedo al nombre
    $archivo= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
    $imagen_temporal=$_FILES['archivo']['tmp_name'];

    //Aquí le digo mueve el archivo temporal original al nombre del archivo"
    move_uploaded_file($imagen_temporal,"imagenes/".$archivo);
    $objconexion= new conexion(); 
    $sql="INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$archivo', '$descripcion');";
    $objconexion->ejecutar($sql);
    header("location:portafolio.php");
    //print_r($_POST);
    //print_r($_FILES);
}
if($_GET){
    //DELETE FROM `proyectos` WHERE `proyectos`.`id` = 8
    $id=$_GET['borrar'];
    $objconexion= new conexion();
    //aqui me devuelve el valor de imagen dependiendo de su id
    $imagen=$objconexion->consultar("SELECT imagen FROM `proyectos` WHERE id=$id");
   //aquí leo el array 0 y lo que contiene imagen
    //print_r($imagen[0]['imagen']);
    //borra
   unlink("imagenes/".$imagen[0]['imagen']);
   
    
    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` = $id";
    $objconexion->ejecutar($sql);
    header("location:portafolio.php");
}

$objconexion= new conexion();
$proyectos=$objconexion->consultar('SELECT * FROM `proyectos`');

//print_r($proyectos);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Datos del proyecto
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" action="portafolio.php" method="post">
                        <!-- el isset tiene que ir, o falla-->
                        Nombre del proyecto: <input required value="<?php echo (isset($_POST['nombre'])?$_POST['nombre']:""); ?>" class="form-control" type="text" name="nombre" id="">
                        </br>
                        Descripción: <textarea  required class="form-control" name="descripcion" id="" rows="3"></textarea>
                        </br>
                        imagen del proyecto: <input  required class="form-control" type="file" name="archivo" id="">
                        </br>
                 
                       
                   
                     
                        <input class="btn btn-success" type="submit" value="Enviar info">

                        </form>
                    </div>
    
                </div>      
            </div>
            <div class="col-md-6">
                <table class="table">
                    <thead>
                      
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($proyectos as $proyecto){ ?>
                        <tr>
                            <td><?php echo $proyecto['id'];  ?></td>
                            <td><?php echo $proyecto['nombre'];  ?></td>
                            <td>
                             
                                
                                    <img  width="100" src=" imagenes/<?php echo $proyecto['imagen'];  ?>" alt=""/>
                                   
                          
                                
                                
                            </div>
                            
                            </td>
                            
                            <td><?php echo $proyecto['descripcion'];  ?></td>
                            <td><a  class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>" >Eliminar</a></td>
                        </tr><!--el signo interrogacion antes de borrar hace que no me redirija a esa url-->
                    <?php };?>
                      
                    
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>


   
</body>
</html>





<?php include ("pie.php"); ?>