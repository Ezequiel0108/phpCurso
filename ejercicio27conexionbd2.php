<?php

$host="localhost";
$usuario="root";
$password="";
$db="album";

$con = new mysqli($host,$usuario,$password,$db);

if($con->connect_error){
    die('conexión fallida: '.$con->connect_error);
}