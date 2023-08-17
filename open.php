<?php
$pageTitle = "eBooks OpenAccess";
ob_start();
?>



<?php
$content = ob_get_clean();
include "master.php";
?>