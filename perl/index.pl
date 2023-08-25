# index.pl

use strict;
use warnings;
use master;

my $title = "Página de Inicio";
my $content = <<"HTML";
<h2>Bienvenido a la Página de Inicio</h2>
<p>Esta es la página de inicio del sitio.</p>
HTML

print render_master_page($title, $content);
