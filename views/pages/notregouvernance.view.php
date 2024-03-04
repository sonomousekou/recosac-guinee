<?php ob_start() ?>
<section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="acceuil" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single"><?php echo __('notregouvernance'); ?></a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s"><?php echo __('notregouvernance'); ?></h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->

      <img src="./public/assets/images/about/org.png" alt="">

<?php
$titre = __('notregouvernance');
$content = ob_get_clean();
require_once "./views/templates.php";
?>
