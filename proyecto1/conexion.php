<?php
/*
class conexion{
    private $servidor="localhost";
    private $usuario="root";
    private $contrasenia="";
    private $conexion;
    public $parametro;

    public function __construct(){
        try{
            $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasenia);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }
    
        catch(PDOException $e){
            return "falla de conexión".$e;

        }
    }
    public function ejecutar($sql){//solo para insertar, borrar,editar etc
        $this->conexion->exec($sql);
       
        return $this->conexion->lastInsertID();
    }
    
    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
      
        $sentencia->execute();
        return $sentencia->fetchAll();

    }
//Este consultar2 seleccion 1 por uno en el fetch_lazy
    public function consultar2($sql){
        $sentencia=$this->conexion->prepare($sql);
      
        $sentencia->execute();
        return $sentencia->fetch(PDO::FETCH_LAZY);

    }
    
}*/



$host="localhost";
$bd="album";
$usuario="root";
$contrasenia="";
try{
   $conexion= new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){}

}

catch(Exception $e){
    echo $e->getMessage();

}

?>