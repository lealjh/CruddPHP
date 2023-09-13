<?php

    function cargar(){
    $consultas = new Consultas();
    $filas = $consultas->cargarPeliculas(); 
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
    </head>
    <body>
    
      <table class=" container table table-dark table-hover mostrar-peli" >
        <div class="row">
    <tr class="col-md-6">
      <th scope="col">id Pelicula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha Estreno</th>
      <th scope="col">Duración</th>
      <th scope="col">Descripción</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    </body>
    </html>
    

      <?php

      foreach ($filas as $fila){
        echo"<tr>";
        echo "<td>".$fila['id_pelicula']."</td>"; 
        echo "<td>".$fila['nombre']."</td>"; 
        echo "<td>".$fila['fecha_estr']."</td>"; 
        echo "<td>".$fila['duracion']."</td>"; 
        echo "<td>".$fila['descripcion']."</td>"; 
        echo "<td><a href='Controllers/eliminar.php?id_pelicula=".$fila['id_pelicula']."'>Eliminar</a></td>"; 
        echo "<td><a href='modificar.php?id_pelicula=".$fila['id_pelicula']."'>Modificar</a></td>"; 

        echo"</tr>"; 
        
      }
  
    echo "</table>";
    
    }


    function buscar($nombre){
            $consultas = new Consultas();
            $filas = $consultas->buscarPeliculas($nombre); 
            
            echo"
            <table>
              <tr>
                <th>id Pelicula</th>
                <th>Nombre</th>
                <th>Fecha Estreno</th>
                <th>Duración</th>
                <th>Descripción</th>
                <th></th>
              </tr>"; 
        

            if(isset($filas)){
              foreach ($filas as $fila){
                echo"<tr>";
                echo "<td>".$fila['id_pelicula']."</td>"; 
                echo "<td>".$fila['nombre']."</td>"; 
                echo "<td>".$fila['fecha_estr']."</td>"; 
                echo "<td>".$fila['duracion']."</td>"; 
                echo "<td>".$fila['descripcion']."</td>"; 
                echo "<td><a href='Controllers/eliminar.php?id_pelicula=".$fila['id_pelicula']."'>Eliminar</a></td>"; 
                echo "<td><a href='Controllers/modificar.php?id_pelicula=".$fila['id_pelicula']."'>Modificar</a></td>"; 
                echo"</tr>"; 
                }
              }
          
            echo "</table>";
    }

?>