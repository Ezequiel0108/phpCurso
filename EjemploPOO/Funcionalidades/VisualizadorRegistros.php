<?php
class VisualizadorRegistros{
    public function Visualizar($registros){
        foreach($registros as $item){
            Printer::MostrarTexto($item->saludar());
            Printer::MostrarTexto("\n");
        }
    }
}