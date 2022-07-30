<?php
interface Auto {
    public function encender();//siempre metodos publicos
    public function apagar();

}
interface gasolina extends Auto{
    public function vaciarTanque();
    public function llenarTanque($cant);


}
class Deportivo implements gasolina{//implements para implementar una interfca
    public function ver(){
        echo "Hola";
    }
    private $estado= false;
    private $tanque= 0;

    public function estado(){
        if($this->estado){
            print"El auto está encendido y tiene".$this->tanque." de litros en el tanque";

        }else {
            print "El auto esta apagado";
        }
       

    }
    public function encender(){//se tiene que definir los metodos de la interfaz
    if ($this->estado){
    echo"No puedes encender el auto dos veces xd";
    
    }else{
        if($this->tanque<=0){
            echo "Usted no puede encender el auto porque el tanque esta vacio";
        }else{
        
        echo" Auto encendido ";
        $this->estado= true;}
    }
    }
    public function apagar(){
        if ($this->estado){
            echo"Tu auto esta apagado";
            $this->estado= false;
            }else{
                echo" Ya lo has apagado jeje";
               
            } 

    }    
    public function vaciarTanque(){//se tienen que definir las los metodos de la interfaz
    $this->tanque= 0;
    }
    public function llenarTanque($cant){
    $this->tanque=$cant;
    }
    public function usar($km){
        if($this->estado){
         $reducir=$km*0.025 ; //0.025  equivale a 0.025litros por kilometro quiere decir que el auto consume 1 litro po cada 40km
         $this->tanque=$this->tanque-$reducir;  
        if($this->tanque <=0){
            $this->estado=false;
        }
        }else{
            echo "No puedes usarlo esta apagado";
        }
    }

 
}

$obj= new Deportivo();
$obj->llenarTanque(10);
$obj->encender();
$obj->usar(400);
$obj->estado();



?>