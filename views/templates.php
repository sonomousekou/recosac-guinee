<!DOCTYPE html>
<html lang="en" dir="lrt">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
  <title><?= $titre ?> | RECOSAC-G </title>

    <?php
        require_once './views/includes/head.inc.php';
    ?>

</head>

<body>
<?php
    require_once './views/includes/loading.inc.php';
?>

<?php
    require_once './views/includes/header.inc.php';
?>

  <main>
  <?= $content ?>
  
  <?php
    require_once './views/externes/galeries.inc.php';
?>
  </main>

<?php
    require_once './views/includes/footer.inc.php';
?>

  <!-- Scroll Up  -->
  <div class="progressParent" id="back-top">
    <svg class="backCircle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <!-- Add an overlay element -->
  <div class="overlay"></div>

<?php
    require_once './views/includes/scripts.inc.php';
?>

</body>

</html>