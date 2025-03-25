<?php

    require_once('saludo.php');

    function hora(){

        return date("H:i:s");

    }

    echo "bienvenido ". $nombre . " la hora es: ";
    echo hora();
   

?>