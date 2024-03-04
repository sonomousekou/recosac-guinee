<?php ob_start() ?>



<?php
$titre = 'Details activité';
$content = ob_get_clean();
require_once "./views/templates.php";
?>
