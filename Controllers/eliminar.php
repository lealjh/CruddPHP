<?php
    require_once ('../Models/conexion.php'); 
    require_once ('../Models/consultas.php'); 


    if(isset($_GET['id_pelicula'])){

    $id_pelicula = $_GET['id_pelicula'];
    $consultas = new Consultas(); 
    $mensaje = $consultas->eliminarPelicula($id_pelicula);

    echo $mensaje; 
    echo '<script> alert("Pelicula eliminada") </script>';
    echo "<script>location.href='../verRegistros.php'</script>"; 
    }


?>