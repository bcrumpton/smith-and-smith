<header class="banner">
  <div class="container">
    <div class="brand-cont">
      <a class="brand" href="<?php echo e(home_url('/')); ?>">
        <img src="<?= App\asset_path('images/s&s_logo.png'); ?>" alt="">
      </a>
    </div>
    <nav class="nav-primary d-none d-lg-block">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
    <div class="hamburger d-block d-lg-none">
      <?php echo e(\App\sage(\BladeSvg\SvgFactory::class)->svg('hamburger')) ?>
    </div>
  </div>
</header>
