<?php
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $basedatos = "unidad3";

    //Conexion
    $conn = mysqli_connect($servidor,$usuario,$contraseña,$basedatos);

    //Test Conexion
    if(!$conn){
        echo "No hay Conexion!!!";
    }
    else{
        echo "Felicidades estas conectado!!!";
    }
?>