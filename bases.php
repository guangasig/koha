<?php
$pageTitle = "Bases Suscritas";
ob_start();
?>
    <div class="container-iste pb-5">
        <div class="card px-4 py-4">
            <div class="row pt-4">
                
                <!-- eLibro -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/src/images/elibro-iste.png" alt="eLibro">
                        <div class="card-body">
                            <p class="card-text">
                                Más de 1000000 títulos en español en las áreas del conocimiento. 
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="https://docs.google.com/spreadsheets/d/1aJBLZaEfHqQWGVIiDr0zNKqHzLMoh9mq/edit?usp=drive_link&ouid=112293524799208158834&rtpof=true&sd=true" target="_blank" class="card-link">Lista de títulos </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Alphacloud -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/src/images/alphacloud-iste.png" alt="Alphacloud">
                        <div class="card-body">
                            <p class="card-text">
                            
                                Acceso a más de 300 títulos en las áreas del conocimiento. 
                                <br>
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="https://docs.google.com/spreadsheets/d/1Zvr4cmRuzU4JuKYf2DG9vQu2dW51QmvM/edit?usp=sharing&ouid=112293524799208158834&rtpof=true&sd=true" target="_blank" class="card-link">Lista de títulos </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Bibliotechnia -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/src/images/bibliotechnia-iste.png" alt="Bibliotechnia">
                        <div class="card-body">
                            <p class="card-text">
                                Acceso a más de 160 títulos en español, texto completo, en las áreas del conocimiento.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="https://docs.google.com/spreadsheets/d/1nRzdfBgY1AlKEE0Zm5meWE1DEWCg-ISP/edit?usp=sharing&ouid=112293524799208158834&rtpof=true&sd=true" target="_blank" class="card-link">Lista de títulos </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- eurekamay  -->
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="/src/images/eureka-iste.png" alt="Eureka">
                        <div class="card-body">
                            <p class="card-text">
                                Libros Dedicados a Carreras Orientadas a Salud.
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="https://docs.google.com/spreadsheets/d/1iIUWef1wNh3uTOfdrMDdE8IXWU_-rWhe/edit?usp=sharing&ouid=112293524799208158834&rtpof=true&sd=true" target="_blank" class="card-link">Lista de títulos </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row pt-4">
                <div class="d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">LIBROS FÍSICOS</h5>
                            <p class="card-text">
                                Más de 1000 títulos en español. 
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <a href="https://docs.google.com/spreadsheets/d/1fuxEru7Y0aZqaGYRsJNWE3Ciuh1rFd83/edit?usp=sharing&ouid=112293524799208158834&rtpof=true&sd=true" target="_blank" class="card-link">Lista de títulos </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$content = ob_get_clean();
include "master.php";
?>
