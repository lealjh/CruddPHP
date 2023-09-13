<?php

    function seleccionar(){

        if(isset($_GET['id_pelicula'])){
        $consultas = new Consultas();
        $id_pelicula = $_GET['id_pelicula']; 
        $filas = $consultas->cargarPelicula($id_pelicula);
        
        foreach ($filas as $fila){
                echo'
                
            <form class="text-left clearfix"  action = "Controllers/modificarPelicula.php" method = "POST">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label  class="form-label">Nombre</label>
                        <input type="text"  name="nombre" value="'.$fila['nombre'].'" class="form-control" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label class="form-label">Fecha Estreno</label>
                        <input type="date"  name="fecha_estr" value="'.$fila['fecha_estr'].'" class="form-control" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label  class="form-label">Duración</label>
                        <input type="number"  name="duracion" value="'.$fila['duracion'].'" class="form-control" >
                    </div> 
                    <div class="form-group col-md-6">
                        <label  class="form-label" >Descripción</label>
                        <input type="text"  name="descripcion" value="'.$fila['descripcion'].'" class="form-control" >
                    </div> 
                    <div class="form-group col-md-6">
                        <input type="hidden"  name="id_pelicula" value="'.$id_pelicula.'" class="form-control" >
                    </div> 
                    
                    <br>
                    <button type="submit" class="btn btn-primary">Modificar</button>
                </div>
            </form>
                
                '; 

            }
       
        }
         
    }
    

?>
