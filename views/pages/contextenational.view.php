<?php ob_start() ?>
 <!-- Breadcrumb Area S t a r t -->
 <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="acceuil" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single"><?php echo __('contextenational'); ?></a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php echo __('contextenational'); ?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <!-- Any Question Area S t a r t -->
      <section class="question-area section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 my-auto">

            <?php
                require_once './views/externes/context.inc.php';
            ?>

          </div>
        </div>
      </section>
      <!-- End-of Question Area -->

<?php
$titre = __('contextenational');
$content = ob_get_clean();
require_once "./views/templates.php";
?>
