<?php

function conectarDB() : mysqli{
    $db = mysqli_connect('82.165.211.7', 'rin', '1Kyrp080*', 'BoldCoffee');

    if(!$db) {
        echo "No se pudo conectar a la base de datos";  // mensaje en caso de error
        exit;
    }

    return $db;
}