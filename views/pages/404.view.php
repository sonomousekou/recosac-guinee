<?php ob_start() ?>

    <!-- 404 area start -->
    <section class="not-found pt-100 pb-100" style="background-image: url('./public/assets/img/bg/bg-abt.jpg');" data-overlay="9">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="area-not-found z-5">
                        <h1 class="head-404 mb-35 mt-40">
            4<span class="green">0</span>4
          </h1>
                        <h5 class="fs-19 mb-25"><?php echo __('er1'); ?></h5>
                        <form action="#" class="search-not-found">
                            <div class="form-group relative mb-25 ">
                                <input type="text" class="form-control input-lg input-white shadow-5" id="phone" placeholder="<?php echo __('er3'); ?>">
                                <i class="fas fa-search transform-v-center"></i>
                            </div>
                        </form>
                        <p class="mb-35"><?php echo __('er2'); ?> <a href="acceuil" class="underline"><?php echo __('home'); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 404 area end -->

<?php
$titre = '404';
$content = ob_get_clean();
require_once "./views/templates.php";
?>
