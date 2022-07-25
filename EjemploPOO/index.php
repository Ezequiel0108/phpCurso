<?php
require_once("Modelos/Persona.php");
require_once("Modelos/Ingeniero.php");
require_once("Modelos/ListaPersonas.php");
require_once("./Funcionalidades/GeneradorPersonas.php");
require_once("./Funcionalidades/Printer.php");
require_once("Funcionalidades/VisualizadorRegistros.php");

$visualizador = new VisualizadorRegistros();
$lista = new ListaPersonas();
$generadorPersonas = new GeneradorPersonas();

$generadorPersonas->GenerarPersonas(7);
$generadorPersonas->GenerarIngenieros(5);

$personasGeneradas = $generadorPersonas->getPersonasGeneradas();
$lista->setListaPersonas($personasGeneradas);

Printer::MostrarTitulo("Registros");
$visualizador->Visualizar($lista->getListaPersonas());