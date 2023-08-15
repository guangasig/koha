# master.pl

sub render_master_page {
    my ($title, $content) = @_;
    return <<"HTML";
<!DOCTYPE html>
<html>
<head>
    <title>$title</title>
</head>
<body>
    <header>
        <h1>Encabezado de la página</h1>
    </header>
    <nav>
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
        <p>Derechos reservados &copy; 2023</p>
    </footer>
</body>
</html>
HTML
}
