<?php
class Page{
    public $nombre= "codigo facil";
    public static $url="www.aprendiendo";

public function info(){
    echo "Bienvenidos a </br>".$this->nombre." La pagina es ".Page::$url;
}
public static function info2(){
    echo "Bienvenidos a ".Page::$url;//este si puedo acceder si se muestra porque url es estatica
    //Page::$nombre//este no funciona porque la propiedad no es estatica
    //$this->nombre este tampoco funciona porque el metodo es estatico 
}

}
//$pagina= new Page();
//$pagina->info2();//como el atributo es estatico no puedo acceder a el desde el metodo con "$this"
//solo llamando al atributo ya sea "Page(osea la clase)::$url o self::$url"
class web extends Page{

}
web::info2();
?>