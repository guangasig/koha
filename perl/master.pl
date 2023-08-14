# master_page.pl

sub render_master_page {
    my ($content) = @_;
    return <<"HTML";
<!DOCTYPE html>
<html>
<head>
    <title>Master Page</title>
</head>
<body>
    <header>
        <!-- Aquí podrías colocar el contenido del encabezado común -->
        <h1>Encabezado de la página</h1>
    </header>
    <nav>
        <!-- Aquí podrías colocar el menú de navegación común -->
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <main>
        $content
    </main>
    <footer>
        <!-- Aquí podrías colocar el pie de página común -->
        <p>Derechos reservados &copy; 2023</p>
    </footer>
</body>
</html>
HTML
}
