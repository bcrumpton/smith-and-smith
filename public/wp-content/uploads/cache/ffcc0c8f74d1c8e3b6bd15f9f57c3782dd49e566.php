<footer class="content-info">
  <div class="container">
    <div class="content-info__box">
      <img src="<?= App\asset_path('images/s&s_logo_white.png'); ?>" alt="Smith & Smith logo white variant">
      <nav class="nav-footer">
        <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

        <?php endif; ?>
      </nav>
      <p>Copyright 2019 Whitehardt, Inc.</p>
    </div>
  </div>
</footer>
