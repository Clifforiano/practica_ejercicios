<?php

    /*
    Simula la estructura de un archivo index.php que incluya:
    - Un require_once de un archivo funciones.php
    - Una función que devuelva la hora actual
    - Un mensaje de saludo con el nombre del usuario (simulado con variable)
    */ 
    
    require_once('saludo.php');

    function hora(){

        return date("H:i:s");

    }

    echo "bienvenido ". $nombre . " la hora es: ";
    echo hora();
   

?>