<header>
    <div class="header-area">
      <div class="main-header header-sticky">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="menu-wrapper d-flex align-items-center justify-content-between">

                <?php
                    require_once './views/includes/logos.inc.php';
                ?>

                <?php
                    require_once './views/includes/nav.inc.php';
                ?>
                  <div class="header-right">
                    <div class="cart">
                <?php
                    require_once './views/includes/lang_select.inc.php';
                ?>
                        <ul class="cart">
                        </li>
                          <li class="cart-list d-lg-inline-block">
                            <a href="dons" class="btn-primary-fill text-uppercase">
                              <span class="pera"><?php echo __('don'); ?></span>
                            </a>
                          </li>
                      </ul>
                    </div>
                  </div>

              </div>
              <!-- Mobile Menu -->
              <div class="div">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>