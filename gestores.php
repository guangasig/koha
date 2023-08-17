<?php
$pageTitle = "Gestores";
ob_start();
?>

<div class="container-iste pb-5 pt-5">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="container-title pb-2">
                    <h2 class="card-title">Zotero</h2>
                </div>
                <div class="container-text">
                    <p>
                        Es un programa de software libre para la gestión de referencias bibliográficas. Zotero permite compilar, organizar, citar, y colaborar en la presentación de referencias bibliográficas de todo tipo de fuentes. Es decir, facilita su trabajo académico o de investigación.
                    </p>
                </div>
                <div class="container-links">
                    <a href="https://biblioteca.espoch.edu.ec/Tutoriales/Guia%20de%20uso%20Zotero.pdf" target="_blank" class="card-link">Guía de uso Zotero</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="d-flex justify-content-center">
                    <img src="https://biblioteca.espoch.edu.ec/assets/img/latest-news/gestoresz.png" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="container-iste">
        <div class="row">
           
            <div class=" col-md-4">
               <div class="row">
                  <!----redes sociales -->
                  <div class="col-sm-6 col-md-5 col">
                     <h5 class="title font-weight-bold p-footer">SÍGUENOS EN REDES</h5>
                     <div class="containerIcnos d-flex flex-wrap">
                        <div class="contentIcon py-1 px-1">
                           <a href="https://www.facebook.com/isteambato" target="_blank">
                              <i class="fa-brands fa-facebook-f icon-font-awsome"></i>
                           </a>
                        </div>
                        <div class="contentIcon py-1 px-1"><a href="https://bit.ly/3Iu2EqT" target="_blank"><i class="fa-brands fa-instagram icon-font-awsome"></i> </a></div>
                        <div class="contentIcon py-1 px-1"><a href="https://twitter.com/EspanaIste" target="_blank"><i class="fa-brands fa-twitter icon-font-awsome"></i></a></div>
                     </div>
                     <div class="containerIcnos d-flex flex-wrap">
                        <div class="contentIcon py-1 px-1"><a href="https://bit.ly/3JkNDZM" target="_blank"><i class="fa-brands fa-linkedin-in icon-font-awsome"></i></a></div>
                        <div class="contentIcon py-1 px-1"><a href="https://www.youtube.com/channel/UCTA5z2FcgOltSJqq08y0Rfg" target="_blank"><i class="fa-brands fa-youtube icon-font-awsome"></i></a></div>
                        <div class="contentIcon py-1 px-1"><a href="https://bit.ly/3JTuHRi" target="_blank"><i class="fa-brands fa-tiktok icon-font-awsome"></i></a></div>
                     </div>
                  </div>
                    <div class="col-sm-6 col-md-7 col">  
                        <!----Contacto -->
                        <h5 class="title p-footer">CONTÁCTANOS</h5>

                        <div class="infoContent d-flex py-1">
                            <div class="contentIcon"><i class="fa-solid fa-at icon-font-awsome"></i></div>
                            <p class="px-1 p-footer">
                                <a class="decorationA p-footer" href="mailto:informacion@iste.edu.ec">informacion@iste.edu.ec </a>
                            </p>
                        </div>
                        <div class="infoContent d-flex">
                            <div class="contentIcon"><i class="fa-solid fa-phone icon-font-awsome"></i></div>
                            <p class="px-1 p-footer">
                                <a class="decorationA p-footer" href="tel:+593962804321"> 096 280 4321</a>
                            </p>
                        </div>
                    </div>
               </div>
            </div>
            <!-- Ubicación -->
            <div class=" col-md-8">
               <h5 class="title p-footer">ENCUÉNTRANOS</h5>

               <div class="infoContent d-flex">
                  <div class="containerDirection">
                     <div class="infoContent d-flex pt-2">
                        <div class="contentIcon"><i class="fa-solid fa-location-dot icon-font-awsome"></i></div>
                        <div class="px-1">ISTE Matriz: Campus 1</div>
                     </div>
                     <div class="pt-4">
                        <a class="a-hover" href="https://goo.gl/maps/pWXuip9zD25xnR4S7" target="_blank">
                           <p class="p-footer"> Bolívar 19-64 entre Castillo y Quito Edif. Sindicato de Chóferes de Tungurahua P.B. </p>
                        </a>
                     </div>
                  </div>

                  <div class="containerDirection">
                     <div class="infoContent d-flex pt-2">
                        <div class="contentIcon"><i class="fa-solid fa-location-dot icon-font-awsome"></i></div>
                        <div class="px-1">Área de la Salud: Campus 2</div>
                     </div>
                     <div class="pt-4 px-1">
                        <a class="decorationA" href="https://goo.gl/maps/S284jcC1hDHyuyUD8" target="_blank">
                           <p class="p-footer"> Rocafuerte y Lalama sector Medalla Milagrosa Edif. Del Salto Jr. </p>
                        </a>
                     </div>
                  </div>

                  <div class="containerDirection">
                     <div class="infoContent d-flex pt-2">
                        <div class="contentIcon"><i class="fa-solid fa-location-dot icon-font-awsome"></i></div>
                        <div class="px-1"> Aguaján: Campus 3</div>
                     </div>
                     <div class="pt-4 px-1">
                        <p class="p-footer">Vía Aguajan Sector Tilulúm, 180150, Ambato, Ecuador.</p>
                     </div>
                  </div>
               </div>
            </div>
            
         </div>
    </div>


<?php
$content = ob_get_clean();
include "master.php";
?>