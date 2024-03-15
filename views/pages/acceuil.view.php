<?php ob_start() ?>
<?php
require_once './views/externes/hero_area.inc.php';
?>

<?php
    // require_once './views/externes/apropos.inc.php';
?>

<?php
    // require_once './views/externes/events.inc.php';
?>

<?php
    // require_once './views/externes/helpful.inc.php';
?>

<?php
// require_once './views/externes/hero_area.inc.php';
?>

<?php
// require_once './views/externes/testi.inc.php';
?>



      <?php
    // require_once './views/externes/blogs.inc.php';
?>

<?php
    // require_once './views/externes/brand.inc.php';
?>

<?php
$titre = __('home');
$content = ob_get_clean();
require_once "./views/templates.php";
?>
