# pagina1.pl

use strict;
use warnings;

# Carga la Master Page
require 'master_page.pl';

# Contenido específico de la página 1
my $content = <<"HTML";
<h2>Página 1</h2>
<p>Contenido de la página 1</p>
HTML

# Renderiza la página completa con la Master Page
print render_master_page($content);
