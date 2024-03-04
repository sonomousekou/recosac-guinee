<?php ob_start() ?>

     <!-- Breadcrumb Area S t a r t -->
     <section class="breadcrumb-section breadcrumb-bg">
        <div class="container">
          <div class="breadcrumb-text">
            <nav aria-label="breadcrumb" class="breadcrumb-nav wow fadeInUp" data-wow-delay="0.0s">
              <ul class="breadcrumb listing">
                <li class="breadcrumb-item single-list"><a href="acceuil" class="single"><?php echo __('home'); ?></a></li>
                <li class="breadcrumb-item single-list" aria-current="page"><a href="javascript:void(0)" class="single"><?php echo __('evenements'); ?> </a></li>
              </ul>
            </nav>
            <h1 class="title wow fadeInUp" data-wow-delay="0.1s">Details evenement</h1>
          </div>
        </div>
      </section>
      <!-- End-of Breadcrumb Area -->
      
        <?php
            require_once './views/externes/event-details.inc.php';
        ?>

        
<?php
$titre = 'Details evenement';
$content = ob_get_clean();
require_once "./views/templates.php";
?>
