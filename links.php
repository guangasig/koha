<?php
$pageTitle = "Links de Interes";
ob_start();
?>

<div class="container-iste py-5">
   <div class="d-flex flex-wrap card-campos">
      
      <!-- EDUCACIÓN  -->
      <div class="col content-options">
         <button class="btn btn-light btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample1">
            <h2 class="btn-title">CAMPO AMPLIO</h2>
            <h3 class="btn-subtitle"> <pre> DUCACIÓN </pre> </h3>
         </button>
         <div class="collapse multi-collapse" id="multiCollapseExample1">
            <div class="card card-body">
               <p class="text-end">
                  Formación para docentes con asignatura de especialización
               </p>
            </div>
         </div>
      </div>

      <!-- ADMINISTRACIÓN -->
      <div class="col content-options">
         <button class="btn btn-light btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">
            <h2 class="btn-title">CAMPO AMPLIO</h2>
            <h3 class="btn-subtitle">
               <pre>ADMINISTRACIÓN</pre>
            </h3>
         </button>
         <div class="collapse multi-collapse" id="multiCollapseExample2">
            <div class="card card-body">
               <p class="text-end">
                  Gestión Financiera
               <p class="text-end">
                  Administración
               </p>
               <p class="text-end">
                  Mercadotecnia y Publicidad
               </p>
            </div>
         </div>
      </div>
      
      <!-- TECNOLOGÍA DE LA INFORMACIÓN Y COMUNICACIÓN -->
      <div class="col content-options">
         <button class="btn btn-light btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">
            <h2 class="btn-title">CAMPO AMPLIO</h2>
            <h3 class="btn-subtitle fs-6">
               <pre>TECNOLOGÍA DE</pre>
               <pre>LA INFORMACIÓN </pre>
               <pre>Y COMUNICACIÓN</pre>
            </h3>
         </button>
         <div class="collapse multi-collapse" id="multiCollapseExample4">
            <div class="card card-body">
               <p class="text-end">
                  Computación
               </p>
               <p class="text-end">
                  Diseño y Administración de Redes y Bases de Datos
               </p>
               <p class="text-end">
                  Desarrollo y Análisis de Sofware y Aplicaciones
               </p>
            </div>
         </div>
      </div>

      <!-- SALUD Y BIENESTAR  -->
      <div class="col content-options">
         <button class="btn btn-light btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">
            <h2 class="btn-title">CAMPO AMPLIO</h2>
            <h3 class="btn-subtitle">
               <pre>SALUD Y BIENESTAR</pre>
            </h3>
         </button>
         <div class="collapse multi-collapse" id="multiCollapseExample5">
            <div class="card card-body">
               <p class="text-end">
                  Enfermería y Obstetricia
               </p>
               <p class="text-end">
                  Terapia y Rehabilitación y Tratamiento de la salud
               </p>
               <p class="text-end">
                  Asistencia a la infancia y servicios para jóvenes
               </p>
               <p class="text-end">
                  Tecnología de Diagnostico y Tratamiento Médico
               </p>
            </div>
         </div>
      </div>

      <!-- SERVICIOS -->
      <div class="col content-options">
         <button class="btn btn-light btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">
            <h2 class="btn-title">CAMPO AMPLIO</h2>
            <h3 class="btn-subtitle">
               <pre>SERVICIOS</pre>
            </h3>
         </button>
         <div class="collapse multi-collapse" id="multiCollapseExample3">
            <div class="card card-body">
               <p class="text-end">
                  Actividad Física
               </p>
               <p class="text-end">
                  Turismo
               </p>
               <p class="text-end">
                  Gestión de Transporte
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
   

<?php
$content = ob_get_clean();
include "master.php";
?>