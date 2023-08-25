<?php
$pageTitle = "Horarios";
ob_start();
?>

   <div class="container-iste pb-5">
      <div class="card px-4 py-4">
            <div class="row">
               <div class="col-sm-12 col-md-6">
                  <div class="container-title pb-2">
                        <h4 class="card-title">Biblioteca del Instituto Tecnológico Superior España</h4>
                  </div>
                  <div class="container-text">
                        <p class="pt-4">
                           Bolívar 19-64 entre Castillo y Quito Edif. Sindicato de Chóferes de Tungurahua P.B.
                        </p>

                        <p class="pt-2">
                           Lunes a Viernes
                           00h:00 - 00h:00 
                        </p>

                        <p class="pt-2">
                           direcciondbrai@iste.edu.ec 
                        </p>
                  </div>
               </div>
               <div class="col-sm-12 col-md-6">
                  <div class="d-flex justify-content-center">
                        <img src="/src/images/nosotros.png" class="img-fluid" alt="...">
                  </div>
               </div>
            </div>
      </div>
   </div>

<?php
$content = ob_get_clean();
include "master.php";
?>