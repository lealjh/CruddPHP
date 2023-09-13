<?php

    require_once ('../Models/conexion.php'); 
    require_once ('../Models/consultas.php'); 


    $msj = null; 
    $consultas = new Consultas();
    $nombre = $_POST['nombre'];
    $fecha_estr = $_POST['fecha_estr'];
    $duracion = $_POST['duracion'];
    $descripcion = $_POST['descripcion'];
    $id_pelicula = $_POST['id_pelicula']; 

    if(strlen($nombre) > 0 && strlen($fecha_estr) > 0 && strlen($duracion) > 0 && strlen($descripcion) > 0){

        $msj = $consultas->modificarPelicula("nombre", $nombre, $id_pelicula); 
        $msj = $consultas->modificarPelicula("fecha_estr", $fecha_estr, $id_pelicula); 
        $msj = $consultas->modificarPelicula("duracion", $duracion, $id_pelicula); 
        $msj = $consultas->modificarPelicula("descripcion", $descripcion, $id_pelicula); 

            echo $msj; 
            echo "<div>
                <a href='../verRegistros.php'>Ver Peliculas</a> 
            </div> "; 

    }else  {
        echo ' <script>alert("Por favor complete todos los campos")</script> ';
        echo " <script>location.href='../modificar.php'</script>";
    }


?>