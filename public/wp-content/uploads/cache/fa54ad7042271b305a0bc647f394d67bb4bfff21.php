<div class="slide-out-menu">
    <div class="close-cont">
        <?php echo e(\App\sage(\BladeSvg\SvgFactory::class)->svg('close')) ?>
    </div>
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
</div>