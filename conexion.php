<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $basedatos = "unidad3";

    //Conexion
    $conn = mysqli_connect($servidor,$usuario,$contraseña,$basedatos);

    //Test Conexion
    if(!$conn){
        echo "No se pudo establecer la conexión a la Base de Datos";
    }
?>