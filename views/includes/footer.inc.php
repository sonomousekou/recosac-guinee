  <!-- Footer S t a r t -->
  <footer>
    <div class="footer-wrapper footer-bg-one">
      <div class="container">
        <div class="footer-menu">
          <div class="col-lg-12">
            <div class="menu-wrapper d-flex align-items-center justify-content-between">
              <div class="header-left d-flex align-items-center justify-content-between">
                <!-- Logo-->
                <div class="logo">
                  <a href="acceuil"><img src="./public/assets/images/logo/dark.png" alt="logo"></a>
                </div>
              </div>
              <!-- Footer-menu -->
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul class="listing" id="navigation2">
                    <li class="single-list"><a href="acceuil" class="single"><?php echo __('home'); ?></a></li>
                    <li class="single-list"><a href="activites" class="single">Nos activités</a></li>
                    <li class="single-list"><a href="projets" class="single"><?php echo __('projets'); ?></a></li>
                    <li class="single-list"><a href="articles" class="single">Blog</a></li>
                    <li class="single-list"><a href="contact" class="single">Contact</a></li>
                  </ul>
                </nav>
              </div>
              <!-- Right button -->
              <ul class="cart">
                <li class="cart-list"><a href="dons" class="donate-btn">Faire un don</a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr class="footer-line">
        <div class="footer-imp-link row g-4 justify-content-between">
          <div class="col-xl-2 col-lg-6">
            <div class="footer-link">
              <h4 class="title">Explore Links</h4>
              <ul class="imp-link">
                <li class="single-list">
                  <a class="single" href="quisommesnous"><?php echo __('quisommesnous'); ?></a>
                </li>
                <li class="single-list">
                  <a class="single" href="notrehistoire"><?php echo __('notrehistoire'); ?></a>
                </li>
                <li class="single-list">
                  <a class="single" href="contextenational"><?php echo __('contextenational'); ?></a>
                </li>
                <li class="single-list">
                  <a class="single" href="structuressanitaires"><?php echo __('structuressanitaires'); ?></a>
                </li>
                <li class="single-list">
                  <a class="single" href="notregouvernance"><?php echo __('notregouvernance'); ?></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-6">
            <div class="footer-link">
              <h4 class="title">Nos partenaires</h4>
              <ul class="imp-link">
                <li class="single-list">
                  <a class="single text text-primary" href="evenements"><?php echo __('evenements'); ?></a>
                </li>
                <li class="single-list">
                  <a class="single text" href="equipe"><?php echo 'Notre équipe' ?></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-5">
            <div class="footer-link">
              <h4 class="title">Nos contacts</h4>
              <ul class="imp-link">
                <li class="single-list">
                  <div class="d-flex align-items-center gap-10 mb-20">
                    <div class="imp-icon">
                      <i class="ri-mail-fill"></i>
                    </div>
                    <a class="single" href="mailto:<?php echo $email1; ?>"><?php echo $email1; ?></a>
                  </div>
                </li>
                <li class="single-list">
                  <div class="d-flex align-items-center gap-10 mb-20">
                    <div class="imp-icon">
                      <i class="ri-phone-fill"></i>
                    </div>
                    <a class="single" href="javascript:void(0)"><?php echo $tel; ?></a>
                  </div>
                </li>
                <li class="single-list">
                  <div class="d-flex align-items-center gap-10 mb-20">
                    <div class="imp-icon">
                      <i class="ri-map-pin-2-fill"></i>
                    </div>
                    <a class="single" href="javascript:void(0)"><?php echo $addresse2; ?></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-4 col-lg-6">
            <div class="footer-link">
              <!-- <h4 class="title">Dernières activités</h4> -->

              <?php
                  // require_once './views/externes/imp-link.inc.php';
              ?>

            </div>
          </div>
        </div>
        <hr class="footer-line">
      </div>
      <!-- footer-bottom area -->
      <div class="footer-bottom-area">
        <div class="container">
          <div class="footer-border">
            <div class="row">
              <div class="col-xl-12">
                <div class="footer-copy-right text-center">
                  <p class="pera"><?php echo $copy; ?> - <?php echo __('tf'); ?>.</p>
                  <div class="footer-social-link">
                    <ul class="listing">
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_facebook =="") echo "javascript:void(0)"; else echo $lien_facebook; ?>" target="<?php if ($lien_facebook =="") echo ""; else echo "_blank";?>"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_youtube =="") echo "javascript:void(0)"; else echo $lien_youtube; ?> " target="<?php if ($lien_youtube =="") echo ""; else echo "_blank";?>"><i class="ri-youtube-fill"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_instagram =="") echo "javascript:void(0)"; else echo $lien_instagram; ?>"  target="<?php if ($lien_instagram =="") echo ""; else echo "_blank";?>"><i class="ri-instagram-line"></i></a>
                        </li>
                        <li class="single-list">
                          <a class="single" href="<?php if ($lien_linkedin =="") echo "javascript:void(0)"; else echo $lien_linkedin; ?>" target="<?php if ($lien_linkedin =="") echo ""; else echo "_blank";?>"><i class="ri-linkedin-fill"></i></a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End-of Footer -->