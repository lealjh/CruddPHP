 <?php

require_once ('Models/conexion.php'); 
require_once ('Models/consultas.php'); 
require_once ('Controllers/seleccionarPelicula.php');

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
   
 <header id="modificarPelicula">
    <h1 class="text-center">Modificar Informacion de la Pelicula</h1>

   <section class="main-content">
      <div class="container">
               <div class="row">
                     <div class="col-lg-12">
                           <div class="card">
                              <div class="card-body">
                                    <div class="basic-elements">
                                          <?php

                                             seleccionar(); 

                                          ?>
                                    </div>
                              </div>
                           </div>
                     </div>
                        <!-- /# column -->
                        
                        <!-- /# column -->
                  </div>
      </div>
   </section>

</header>

 </body>
 </html>