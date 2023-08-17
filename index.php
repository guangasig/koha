<?php
$pageTitle = "Index";
ob_start();
?>
    
<?php
$content = ob_get_clean();
include "master.php";
?>
