<?php
class Libro {
//propiedades

//Método mágico
public function  __construct(
    private string $autor,
    private string $titulo,
    private float $precio,
    private int $stock,
    private int $id
)
{
//echo "Soy una instancia de libro";
}
public function getinfo(){
    $info= "Tu autor del Libro es: $this->autor</br>
            Tu Titulo del libro es: $this->titulo</br>
            Tu precio del libro es: $this->precio</br>
            Tu stock es de: $this->stock</br>
            Tu id de libro es $this->id</br>
             ";
    return $info;
}
}
class Comics extends Libro {
/* Este cinstructor hijo va a recibir las propiedades dek padre mas las nuevas del mismo */
public function  __construct(
    //Estas serían las propiedades del padre
    $autor,
    $titulo,//estas ya no se definen privadas ni nada porque vienen de la clase padre 
    $precio,
    $stock,
    $id,
    private string $ilustradores,
    private string $volumen
){//Aqui llamariamos al constructor padre, para enviarle lo que recibió el constructor hijo
    parent::__construct($autor,$titulo,$precio,$stock,$id);//Aquí se heredan las propiedades privadas de otro constructor padre
}
public function getinfo(){
    echo parent::getinfo();//hereda las propiedades de getinfo padre pero si no hicieramos lo de las propiedades heredadas del constructor no funcionaria 
    $info="Tu ilustración es: $this->ilustradores</br>
    Tu volumen es: $this->volumen</br>";
    return $info;
}
}

//instancia de la clase libro
$libro1= new Libro(
    "Ezequiel",
    "Libro de ejemplo",
    200.00,
    20,
    1
);
$libro2= new Libro(
    "Alvaro",
    "Libro de ejemplo 2",
    100.00,
    40,
    2
);
$comics1= new comics(
    "comics1",
    "comic 2",
    103.00,
    402,
    21,
    "Ilustración ejemplo",
    "Volumen 3"
);
//libro1->precio=0.00;//solo funcionaria si fuera publica

//var_dump($libro1,$libro2);//con esto accedes al objeto
//echo $libro1->autor;//aquí accedes a la propiedad
echo $libro1->getinfo()."</br>";
echo $libro2->getinfo()."</br>";
echo $comics1->getinfo()

?>