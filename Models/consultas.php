<?php


    class Consultas{

        public function insertarPelicula($nombre, $fecha_estr, $duracion, $descripcion){
            $modelo = new Conexion(); 

            $conexion = $modelo->get_conexion(); 
            $sql ="INSERT INTO peliculas (nombre, fecha_estr, duracion, descripcion) values(:nombre, :fecha_estr, :duracion, :descripcion)"; 
            $statement = $conexion->prepare($sql); 

            $statement->bindParam(':nombre', $nombre); 
            $statement->bindParam(':fecha_estr', $fecha_estr); 
            $statement->bindParam(':duracion', $duracion); 
            $statement->bindParam(':descripcion', $descripcion); 

            if(!$statement){
                return "Error al crear el Registro";
            }else{
                $statement->execute(); 
                return "Registro Creado Correctamente";
            }
        }

        public function cargarPeliculas(){
            $rows = null; 
            $modelo = new Conexion(); 
            $conexion = $modelo->get_conexion(); 
            $sql = "select * from peliculas"; 
            $statement = $conexion->prepare($sql); 
            $statement->execute(); 

            while ($result = $statement->fetch()){
                $rows[] = $result; 
            }
            return $rows; 
        }

        public function eliminarPelicula($id_pelicula){
            $modelo = new Conexion(); 
            $conexion = $modelo->get_conexion(); 
            $sql = "DELETE FROM peliculas WHERE id_pelicula =:id_pelicula"; 

            $statement = $conexion->prepare($sql); 
            $statement->bindParam(':id_pelicula', $id_pelicula); 

            if(!$statement){
                return "Error al Eliminar Pelicula";
            }else{
                $statement->execute(); 
                return "Pelicula Eliminada Exitosamente"; 
            }
        }


            public function buscarPeliculas($nombre){ 
                $rows = null; 
                $modelo = new Conexion(); 
                $conexion = $modelo->get_conexion(); 
                $nombre ="%".$nombre."%"; 
                $sql = "SELECT * FROM peliculas WHERE nombre LIKE :nombre"; 
                $statement = $conexion->prepare($sql); 
                $statement->bindParam (":nombre", $nombre); 
                $statement->execute(); 

                while ($result = $statement->fetch()){
                    $rows[] = $result; 
                }
                return $rows; 
            }


            public function cargarPelicula($id_pelicula){
                $rows = null; 
                $modelo = new Conexion(); 
                $conexion = $modelo->get_conexion(); 
                $sql = "SELECT * FROM peliculas WHERE id_pelicula = :id_pelicula"; 
                $statement = $conexion->prepare($sql); 
                $statement->bindParam(":id_pelicula", $id_pelicula);
                $statement->execute(); 
    
                while ($result = $statement->fetch()){
                    $rows[] = $result; 
                }
                return $rows; 
            }

            public function modificarPelicula($campo, $valor, $id_pelicula ){
                $modelo = new Conexion(); 
                $conexion = $modelo->get_conexion(); 
                $sql = "UPDATE peliculas SET $campo = :valor WHERE id_pelicula = :id_pelicula"; 
                $statement = $conexion->prepare($sql); 
                $statement->bindParam(":valor", $valor); 
                $statement->bindParam(":id_pelicula", $id_pelicula); 

                if(!$statement){
                    return "Eror al Modificar la Información de la Pelicula"; 
                }else{
                    $statement->execute(); 
                    return "Información Modificada Exitosamente"; 
                }

            }

    }

        
?>