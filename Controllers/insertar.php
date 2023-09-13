<?php

    require_once ('../Models/conexion.php'); 
    require_once ('../Models/consultas.php'); 

    $mensaje = null; 

    $nombre = $_POST['Nombre'];
    $fecha_estr = $_POST['Fecha_Estreno']; 
    $duracion = $_POST['Duración']; 
    $descripcion = $_POST['Descripción']; 


    if(strlen($nombre) > 0 && strlen($fecha_estr) > 0 && strlen($duracion) > 0 && strlen($descripcion) > 0){

        $consultas = new Consultas(); 
        $mensaje = $consultas->insertarPelicula($nombre, $fecha_estr, $duracion, $descripcion);
        echo "<br><a href='../index.html'>Regisrtrar Nueva Pelicula<a>"; 



    }else{
        echo ' <script>alert("Por favor complete todos los campos")</script> ';
        echo " <script>location.href='../index.html'</script>";
    }

    echo $mensaje;

?>