<?php
class Auto{
    public $encendido= false;
    private $gasolina=0;
   
    public function encender(){
        if ($this->encendido){
            echo "Tu auto ya está encendido no se puede encender dos veces jeje";
        }else{
            echo "Tu auto se acaba de encender ";
            $this->encendido=true;
        }
    } 
    public function llenarGasolina($litros){
        $this->gasolina=$litros;

    }
    public function andar($km){
       
    
        if($this->encendido){   
                $reducir=$km*0.025;//0.025  equivale a 0.025litros por kilometro quiere decir que el auto consume 1 litro po cada 40km
                $this->gasolina=$this->gasolina-$reducir;
                
                
        } 
        if($this->gasolina<=0){
            $this->encendido=false;
        }


}
public function __destruct(){
  
    if($this->encendido){
        echo "esta encendido";
        
       
            echo "Tu gasolina restante es: ".$this->gasolina;
      
     
    }

    else{
      
        echo "Ya no puedes andar esta apagado";
    }
}

}
$obj= new Auto();
$obj->encender();
$obj->llenarGasolina(5);
$obj->andar(200);


?>