<?php include "cabecera.php";?></br>
<?php include("conexion.php");?>
<?php
$Rimagen="";



$txtID=(isset($_POST['txtID'])?$_POST['txtID']:"");
$nombre=(isset($_POST['nombre'])?$_POST['nombre']:"");
$descripcion=(isset($_POST['descripcion'])?$_POST['descripcion']:"");
$archivo=(isset($_FILES['archivo']['name'])?$_FILES['archivo']['name']:"");
$accion=(isset($_POST['accion'])?$_POST['accion']:"");



        
if($_POST){
 
       
    $boton=$_POST['accion'];

    switch ($boton) {

        case 'Seleccionar':
            # code...
            //echo "seleccionar";
           
           
            $proyect=$conexion->prepare("SELECT * FROM `proyectos` where id=:id");
            $proyect->bindParam(':id',$txtID);
            
            $proyect->execute();
            
            $guardar=$proyect->fetch(PDO::FETCH_LAZY);
           
             $nombre= $guardar['nombre'];
             $descripcion= $guardar['descripcion'];
            
             $imagen=$conexion->prepare("SELECT imagen FROM `proyectos` WHERE id=:id");
             $imagen->bindParam(':id',$txtID);
             $imagen->execute();
             $guardar2=$imagen->fetch(PDO::FETCH_LAZY);
 
            $archivo= $guardar2['imagen'];
            
             
             
            break;
       
       case 'Modificar':
       
            $fecha= new DateTime();
        //recibo el nommbre del input "archivo" y luego accedo al nombre
            $archivo= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
            $imagen_temporal=$_FILES['archivo']['tmp_name'];
            move_uploaded_file($imagen_temporal,"imagenes/".$archivo);
           
            $imagen=$conexion->prepare("SELECT imagen FROM `proyectos` WHERE id=:id");
            $imagen->bindParam(':id',$txtID);
            $imagen->execute();
            $guardar2=$imagen->fetch(PDO::FETCH_LAZY);

            unlink("imagenes/".$guardar2['imagen']);
         
            $sentencia=$conexion->prepare("UPDATE `proyectos` SET `nombre` = :nombre ,`imagen` = :archivo, `descripcion` = :descripcion WHERE `proyectos`.`id` = :id");

            $sentencia->bindParam(':nombre',$nombre);
            $sentencia->bindParam(':archivo',$archivo);
            $sentencia->bindParam(':descripcion',$descripcion);
            $sentencia->bindParam(':id',$txtID);
            $sentencia->execute();
            
            header("location:portafolio.php");
        

            break;
        case 'cancelar':
           
            $nombre=(isset($_POST['nombre'])?"":"");
            $descripcion=(isset($_POST['descripcion'])?"":"");
            $archivo=(isset($_FILES['archivo']['name'])?"":"");
                
            echo "Presionaste cancelar";
            // el headder es otra forma pero cuando lo uso me pide el valor imagen para enviar ya que tiene un required
           // header("Location:portafolio.php");

            break; 
           
        case 'Enviar info':
            //Aqui solo muevo la imagen sobre la carpeta
                $fecha= new DateTime();
            //recibo el nommbre del input "archivo" y luego accedo al nombre
                $archivo= $fecha->getTimestamp()."_".$_FILES['archivo']['name'];
                $imagen_temporal=$_FILES['archivo']['tmp_name'];
                file_exists("imagenes/".$archivo) ;
                //Aquí le digo mueve el archivo temporal a la carpeta imagenes mas el nombre del archivo"
                move_uploaded_file($imagen_temporal,"imagenes/".$archivo);
               
                $SSQL=$conexion->prepare("INSERT INTO `proyectos` (`nombre`, `imagen`, `descripcion`) VALUES (:Rnombre, :Rarchivo, :Rdescripcion);");
                $SSQL->bindParam(':Rnombre',$nombre);
                $SSQL->bindParam(':Rarchivo',$archivo);
                $SSQL->bindParam(':Rdescripcion',$descripcion);
                $SSQL->execute();
                header("location:portafolio.php");
                //print_r($_POST);
                //print_r($_FILES);
            break;
            
        
       
        
        case 'Borrar':
            # code...
            //echo "borrar";
          
            //aqui me devuelve el valor de imagen dependiendo de su id
            $imagen=$conexion->prepare("SELECT imagen FROM `proyectos` WHERE id=:id");
            $imagen->bindParam(':id',$txtID);
            $imagen->execute();
            $guardar2=$imagen->fetch(PDO::FETCH_LAZY);
         
            if (file_exists("imagenes/".$guardar2['imagen'])){

            unlink("imagenes/".$guardar2['imagen']);}
          
            
            $sent=$conexion->prepare("DELETE FROM `proyectos` WHERE `proyectos`.`id` =:id");
            $sent->bindParam(':id',$txtID);
            $sent->execute();
            header("location:portafolio.php");
           
            break;
        }

        //print_r($txtID);

}



/*
if($_GET){
         
    //DELETE FROM `proyectos` WHERE `proyectos`.`id` = 8
    $id=$_GET['borrar'];
    $objconexion= new conexion();
    //aqui me devuelve el valor de imagen dependiendo de su id
    $imagen=$objconexion->consultar("SELECT imagen FROM `proyectos` WHERE id=$id");
   //aquí leo el array 0 y lo que contiene imagen
   // print_r($imagen);//Array ( [0] => Array ( [imagen] => 1658591293_img1.jpeg [0] => 1658591293_img1.jpeg ) )
   //print_r($imagen[0]['imagen']);[0] => 1658591293_img1.jpeg 
    //borra
   unlink("imagenes/".$imagen[0]['imagen']);
   
    $sql="DELETE FROM `proyectos` WHERE `proyectos`.`id` = $id";
    $objconexion->ejecutar($sql);
    //header("location:portafolio.php");
    //$Rarchivo=(isset($_FILES['archivo']['name'])?$_FILES['archivo']['name']:"");
//print_r($Rarchivo);
    //DELETE FROM `proyectos` WHERE `proyectos`.`id` = 8
  
    //header("location:portafolio.php");
}*/


$sentenciaSQL=$conexion->prepare("SELECT * FROM proyectos");
$sentenciaSQL->execute();
$proyectos=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);





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
                        <form enctype="multipart/form-data" action="" method="post">
                        <!-- el isset tiene que ir, o falla-->
                        <input type="hidden" name="txtID" id="txtID" value="<?php echo (isset($txtID)?$txtID:""); ?>" > 
                        Nombre del proyecto: <input   required value="<?php echo (isset($nombre)?$nombre:""); ?>" class="form-control" type="text" name="nombre" id="">
                        </br>
                        Descripción: <textarea  value="" required  class="form-control" name="descripcion" id="" rows="3"><?php echo (isset($descripcion)?$descripcion:""); ?></textarea>
                        </br>
                        imagen del proyecto: <img width="50" src="imagenes/<?php echo $archivo?>" alt="">  
                       
                       <input   value="" required class="form-control" type="file" name="archivo" id="">
                        </br>
                 
                       
                   
                     
                        <input <?php echo ($accion=="Seleccionar ")?"disabled":"";  ?> class="btn btn-success" type="submit" name="accion" value="Enviar info">
                      
                        <input <?php //echo ($accion=="Seleccionar")?"disabled":"";  ?> class="btn btn-success black-text yellow" type="submit" name="accion" value="Modificar">
                        <input <?php //echo ($accion=="Seleccionar")?"disabled":"";  ?> class="btn btn-success red" type="submit" name="accion" value="cancelar">

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
                    <?php foreach($proyectos as $proyecto){ ?>
                    
                                
                        
                        
                        
                        <tr>
                            <td><?php echo $proyecto['id'];      ?></td>
                            <td><?php echo $proyecto['nombre'];  ?></td>
                            <td> <img  width="100" src=" imagenes/<?php echo $proyecto['imagen'];?> ">  </td>
                           <!-- <td>
                             
                                    <img  width="100" src=" imagenes<?php// echo $proyecto['imagen'];  ?>" alt=""/> 
                                    
                           
                            
                            </td>-->
                            
                            <td><?php echo $proyecto['descripcion'];  ?></td>

                            <td>
                                                              <!--<a  class="btn btn-danger" href="?borrar=<?php //echo $proyecto['id']; ?>" >Borrar</a>-->
                                <form action="" method="post">
                                <input type="hidden" name="txtID" id="txtID" value="<?php echo $proyecto['id'];?>" >   
                                <input class="btn blue" type="submit" name="accion" value="Seleccionar" id="">
                           
                                <input class="btn btn-danger" type="submit" value="Borrar" name="accion">
                               
                                </form>
                            </td>
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