<?php

include_once("controladores/controlador".$controlador.".php");

// Instanciando a partir de la clase ControladorPaginas
$objControlador="controlador".ucfirst($controlador);

$controlador=new $objControlador();

$controlador->$accion();


?>