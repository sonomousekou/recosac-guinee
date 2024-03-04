<?php
    require_once './views/externes/activePages.inc.php';
?>

<!-- Main-menu for desktop -->
<div class="main-menu d-none d-lg-block">
  <nav>
    <ul class="listing" id="navigation">
      <li class="single-list"><a href="acceuil" class="single <?php if ($activePage === 'acceuil') echo 'active'; ?>"><?php echo __('home'); ?></a></li>
      <li class="single-list">
        <a href="javascript:void(0)" class="single <?php if ($activePage === 'quisommesnous' || $activePage === 'notrehistoire'
        || $activePage === 'contextenational' || $activePage === 'structuressanitaires' || $activePage === 'notregouvernance' || 
        $activePage === 'partenaires') echo 'active'; ?>"><?php echo __('nd'); ?><i class="ri-arrow-down-s-line"></i></a>
        <ul class="submenu">
          <li class="single-list"><a href="quisommesnous" class="single "><?php echo __('quisommesnous'); ?></a></li>
          <li class="single-list"><a href="notrehistoire" class="single"><?php echo __('notrehistoire'); ?></a></li>
          <li class="single-list"><a href="contextenational" class="single"><?php echo __('contextenational'); ?></a></li>
          <li class="single-list"><a href="structuressanitaires" class="single"><?php echo __('structuressanitaires'); ?></a></li>
          <li class="single-list"><a href="notregouvernance" class="single"><?php echo __('notregouvernance'); ?></a></li>
          <li class="single-list"><a href="partenaires" class="single"><?php echo __('partenaires'); ?></a></li>
        </ul>
      </li>
      <li class="single-list"><a href="projets" class="single <?php if ($activePage === 'projets') echo 'active'; ?>"><?php echo __('projets'); ?></a></li>
      <li class="single-list"><a href="articles" class="single <?php if ($activePage === 'articles') echo 'active'; ?>">Blog</a></li>
      <li class="single-list"><a href="activites" class="single <?php if ($activePage === 'activites') echo 'active'; ?>">Nos Activités</a></li>
      <li class="single-list"><a href="contact" class="single <?php if ($activePage === 'contact') echo 'active'; ?>">Contact</a></li>
    </ul>
  </nav>
</div>