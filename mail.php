<?php
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header("Location: index.html");
}
die();

//$metodo = $_SERVER['REQUEST_METHOD'];

/*
if( ! isset( $_POST['nombre']) ){
    header("Location: index.html");
}
*/




$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

var_dump($nombre);
$rta = mail('designdigitalpro9@gmail.com', "Mensaje web:  $asunto" , $mensaje);
var_dump($rta);