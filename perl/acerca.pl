# acerca.pl

use strict;
use warnings;
use master;

my $title = "Página acerca";
my $content = <<"HTML";
<h2>Bienvenido a la Página 1</h2>
<p>Esta es la página del sitio.</p>
HTML

print render_master_page($title, $content);
