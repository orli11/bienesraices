<?php
    function conectarDB() {
        $db = mysqli_connect('localhost', 'root', 'ojflo1108', 'bienesraices_crud');

        if(!$db) {
            echo "Error: No se pudo conectar";
            exit;
        }

        return $db;
    }