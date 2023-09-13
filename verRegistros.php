<?php
    
    require_once ('Models/conexion.php'); 
    require_once ('Models/consultas.php'); 
    require_once ('Controllers/cargarPeliculas.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a6c0b2cb0d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Views/Css/style.css">
</head>
<body>
   
<header id="verRegistros">

        <h1 class="text-center">Peliculas</h1>

    <!-- <div class="busqueda text-center">

        <form method="get">
            <input type="text" name="buscar" value="buscar" >
            <input type="submit" name="Buscar" >
        </form>

    </div> -->

        <?php
        
            if(isset($_GET['buscar'])){
                buscar($_GET['buscar']);
            }else{
                cargar(); 
            }
        ?>
        
        <div class="registrar-nuevo text-center">
            <a href="index.html">Registar Nueva Pelicula</a>
        </div>
    </header>
</body>
</html>