<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Exo 2' rel='stylesheet'>
    
    <link rel="stylesheet" type="text/css" href="./src/css/header.css" media="screen" />
    <title><?php echo $pageTitle; ?></title>
</head>
<body>
    <div class="page">
        <!-- header -->
        <div class="header">
            <div class="container-iste">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#"> <img src="../src/images/logo-biblioteca.png" class="icon-logo"/></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end d-flex flex-row-reverse" tabindex="-1" id="offcanvasNavbar"
                            aria-labelledby="offcanvasNavbarLabel" style="padding-top: 0.7rem;">
            
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                                </button> 
                            </div>
            
                            <div class="offcanvas-body">
                                <ul class="navbar-nav flex-grow-1 pe-3 sm-navbar-nav">

                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Inicio</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Servicios
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item"  href="/formacion.php">
                                                    Formación de Usuarios
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"  href="/ttitulacion.php">
                                                    Trabajos Titulación
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item"  href="/bibliografia.php">
                                                    Bibliografía ISTE
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Recursos
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/bases.php">
                                                    Bases Suscritas
                                                </a>
                                            </li>
                                                <a class="dropdown-item" href="/open.php">
                                                    eBooks OpenAccess
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Herramientas
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/ouriginal.php">
                                                    Antiplagio (Ourinal)
                                                </a>
                                            </li>
                                                <a class="dropdown-item" href="/links.php">
                                                    Links de Interes
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Revistas
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" target="_blank" href="https://revistas.iste.edu.ec/">
                                                    ISTE SCIENTIST
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Conócenos
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/acerca.php"> Acerca de la Biblioteca</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/horarios.php">Horarios</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/guias.php">Guías y Tutorias</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/reglamento.php">Reglamento ISTE</a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </nav>
            </div>
            <div class="container-title d-flex align-items-center">
                <div class="pt-2 pb-2 title-page">
                    <h1 class="title"><?php echo $pageTitle; ?></h1>
                </div>
            </div>
        </div>
        <!-- body -->
        <div class="content">
            <main>
                <?php echo $content; ?>
            </main>
        </div>
        <!-- footer -->
        <div class="footer">
            <div class="container-iste">
                <div class="row">
                    <!----redes sociales -->
                    <div class="col-sm-12 col-md-4 col d-flex justify-content-center">
                        <div class="containerIcnos">
                            <h5 class="title font-weight-bold p-footer">SÍGUENOS EN REDES</h5>
                            <div class="containerIcnos d-flex flex-wrap">
                                <div class="contentIcon py-1 px-1">
                                    <a href="https://www.facebook.com/isteambato" target="_blank"><i class="fa-brands fa-facebook-f icon-font-awsome"></i></a>
                                </div>
                                <div class="contentIcon py-1 px-1">
                                    <a href="https://bit.ly/3Iu2EqT" target="_blank"><i class="fa-brands fa-instagram icon-font-awsome"></i> </a>
                                </div>
                                <div class="contentIcon py-1 px-1">
                                    <a href="https://twitter.com/EspanaIste" target="_blank"><i class="fa-brands fa-twitter icon-font-awsome"></i></a>
                                </div>
                                <div class="contentIcon py-1 px-1">
                                    <a href="https://bit.ly/3JkNDZM" target="_blank"><i class="fa-brands fa-linkedin-in icon-font-awsome"></i></a>
                                </div>
                                <div class="contentIcon py-1 px-1">
                                    <a href="https://www.youtube.com/channel/UCTA5z2FcgOltSJqq08y0Rfg" target="_blank"><i class="fa-brands fa-youtube icon-font-awsome"></i></a>
                                </div>
                                <div class="contentIcon py-1 px-1">
                                    <a href="https://bit.ly/3JTuHRi" target="_blank"><i class="fa-brands fa-tiktok icon-font-awsome"></i></a>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!----Contacto -->
                    <div class="col-sm-12 col-md-4 col d-flex justify-content-center">
                        <div class="containerIcnos"> 
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

                    <!-- Ubicación -->
                    <div class="col-sm-12 col-md-4 col d-flex justify-content-center">
                        <div class="containerIcnos"> 
                            <h5 class="title p-footer">ENCUÉNTRANOS</h5>

                            <div class="infoContent d-flex">
                                <div class="containerDirection">
                                    <div class="infoContent d-flex pt-2">
                                        <div class="contentIcon"><i class="fa-solid fa-location-dot icon-font-awsome"></i></div>
                                        <div class="px-1 py-1 p-footer">Casona Campus 5</div>
                                    </div>
                                    <div class="px-4">
                                        <a class="a-hover" href="https://goo.gl/maps/BsQoTievccGk3JeJ8" target="_blank">
                                            <p class="p-footer"> Calle: Mera y Bolívar</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
