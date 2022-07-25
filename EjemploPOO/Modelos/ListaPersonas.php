<?php
class ListaPersonas{
    private $listaPersonas = [];

    public function getListaPersonas(){
        return $this->listaPersonas;
    }
    public function setListaPersonas($listaPersonas){
        $this->listaPersonas = $listaPersonas;
    }
    public function addItem($item){
        array_push($this->listaPersonas,$item);
    }
    public function delItem($item){
        unset($this->listaPersonas[array_search($item, $this->listaPersonas)]);
    }
}
