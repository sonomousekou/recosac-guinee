<?php ob_start() ?>

   <!-- Breadcrumb Area S t a r t -->
   <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="acceuil" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single">Activités </a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Nos activités</h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->


      <?php
        // require_once './views/externes/blogs.php';
        ?>

        <h1 class="text text-center mb-5 mt-5">Aucune activité publiée pour le moment !</h1>


<?php
$titre = 'Activités';
$content = ob_get_clean();
require_once "./views/templates.php";
?>
