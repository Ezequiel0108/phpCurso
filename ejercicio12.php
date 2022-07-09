<?php

//ciclo for
/* Número inicial es 0, si inicial es menor que 20
entonces incrementale 1*/
if($_POST){
$valor1=$_POST['valor'];
$valor2=$_POST['valor2'];
$entero=intval($valor1);
$entero2=intval($valor2);

}
if($_POST){
for ($inicial=0; $inicial <$entero2 ; $inicial++) { 
    # code...
   


        # code...
    
    $multiplicacion=$valor1*$inicial;
    echo "la multiplicación de".$valor1." por ".$inicial." Es igual a ".$multiplicacion." </br>";
}
}

?>

<form action="ejercicio12.php" method="post">
Ingresa el numero de Cual tabla de multiplicar quieres obtener
<input type="text" name="valor">
</br>
ingresa hasta que numero de la tabla quieres
<input type="text" name="valor2">

<input type="submit" value="enviar">
</form>

