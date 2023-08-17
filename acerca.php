<?php
$pageTitle = "Acerca de la Biblioteca";
ob_start();
?>



<?php
$content = ob_get_clean();
include "master.php";
?>